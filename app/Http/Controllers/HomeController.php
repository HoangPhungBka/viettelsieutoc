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
        $user = User::query()->first(['phone', 'number']);
        $view = (auth()->check()) ? 'manager.home' : 'dashboard';
        $categories = null;

        $query = Package::query();
        if ($category) {
            $query->whereHas('category', function (Builder $builder) use ($category) {
                $builder->where('slug', $category);
            });
        }

        if (($request = \request())->has('name')) {
            $query->where('name', 'LIKE', '%' . $request->name . '%');
        }

        if (!$category && !\request()->has('name') && !auth()->check()) {
            $query->orWhereHas('category', function (Builder $builder) use ($category) {
                $builder->where('slug', 'goi-hot');
            })->orWhere('type', '1');
        }

        $packages = $query->get();
        $category = (!empty($category) && !$packages->isEmpty()) ? $category = $packages->get(0)->category->name : null;

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
        Package::create(array_filter($request->validated()));

        return redirect('home.index');
    }

    /**
     * Display the specified resource.
     *
     * @param string $name
     * @return \Illuminate\Http\Response
     */
    public function show($name)
    {
        $categories = null;
        $view = 'dashboard';
        $user = User::query()->first(['phone', 'number']);
        $pack = Package::with('category')->where('name', $name)->first();

        if (auth()->check()) {
            $view = 'manager.package';
            $categories = Category::all();
        } else {
            if ($pack) {
                $pack->increment('count');
            }
            $packages = Package::all();
        }

        return view($view, compact('user', 'pack', 'package', 'packages', 'categories'));
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
        $attributes = array_filter($request->validated());

        Package::query()->findOrFail($request->id)->update($attributes);

        return redirect('home.index');
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

        return redirect('home.index');
    }

    /**
     * @param \App\Http\Requests\PackageRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function profile(ProfileRequest $request)
    {
        auth()->user()->update($request->validated());

        return redirect('home.index');
    }

    public function create()
    {
        $categories = Category::all();

        return view('manager.package', compact('categories'));
    }
}
