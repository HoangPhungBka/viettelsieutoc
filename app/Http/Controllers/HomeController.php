<?php

namespace App\Http\Controllers;

use App\Http\Requests\PackageRequest;
use App\Http\Requests\ProfileRequest;
use App\Models\Category;
use App\Models\Package;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param string|null $category
     * @return \Illuminate\Http\Response
     */
    public function index($category = null)
    {
        $user = User::query()->first(['cellphone', 'telephone']);
        $view = (auth()->check()) ? 'manager.home' : 'dashboard';
        $categories = null;

        $query = Package::query();
        if ($category) {
            $query->whereHas('categories', function (Builder $builder) use ($category) {
                $builder->where('slug', $category);
            });
        }

        if (($request = \request())->has('name')) {
            $query->where('name', 'LIKE', '%' . $request->name . '%');
        }

        if (!$category && !\request()->has('name') && !auth()->check()) {
            $query->where('type', '1');
        }

        $packages = $query->get();
        $category = (!empty($category) && !$packages->isEmpty()) ? Category::query()->where('slug', $category)->first(['name', 'description']) : null;

        if (auth()->check()) {
            $categories = Category::all();
        }

        return view($view, compact('packages', 'user', 'category', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\PackageRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(PackageRequest $request)
    {
        $package = Package::create($packageRequest = array_merge($request->validated(), ['count' => 0]));
        $package->categories()->attach(collect($packageRequest['categories'])->keys()->all());

        return redirect()->route('home.index');
    }

    /**
     * Display the specified resource.
     *
     * @param string $name
     * @return \Illuminate\View\View
     */
    public function show($name)
    {
        $user = User::query()->first(['cellphone', 'telephone']);
        $pack = Package::with('categories')->where('name', $name)->first();

        if (auth()->check()) {
            $categories = Category::all();

            $currentCategories = $pack->categories->mapWithKeys(function ($item) {
                return [$item['id'] => 'checked'];
            });

            return view('manager.package', compact('user', 'pack', 'name', 'categories', 'currentCategories'));
        } else {
            if ($pack) {
                $pack->increment('count');
            }
            $packages = Package::query()->where('type', 1)->get();

            return view('dashboard', compact('user', 'pack', 'name', 'packages'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\PackageRequest $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(PackageRequest $request)
    {
        $attributes = $request->validated();

        $package = Package::query()->findOrFail($request->id);
        $package->update($attributes);

        $categories = collect($attributes['categories']);
        $package->categories()->sync($categories->keys()->all());

        return redirect()->route('home.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        Package::destroy($id);

        return redirect()->route('home.index');
    }

    /**
     * @param \App\Http\Requests\PackageRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function profile(ProfileRequest $request)
    {
        auth()->user()->update($request->validated());

        return redirect()->route('home.index');
    }

    public function create()
    {
        $categories = Category::all();

        return view('manager.package', compact('categories'));
    }
}
