@extends('layouts.app')
@section('content')
    @if(request()->is('/'))<img src="{{asset('images/banner.jpg')}}" alt="Viettel 4G Siêu tốc"
                                class="img-fluid w-100">@endif
    <div class="container my-4 pt-4">
        @if(request()->filled('name'))
            <h3 class="mb-4">Kết quả tìm kiếm cho "{{request()->name}}"</h3>
            @if(empty($packages->get(0)))
                <h4 class="text-center py-5 text-danger">Không tìm thấy nội dung phù hợp!</h4>
            @endif
        @elseif(isset($category))
            <h3 class="mb-4 font-weight-bold">{{$category->name}}</h3>
            <h4 class="mb-3">{!! $category->description !!}</h4>
        @elseif(isset($name))
            @if(isset($pack))
                <h3 class="mb-4 font-weight-bold">{{$name}}</h3>
                <div class="row">
                    <div class="col-md-6 mb-3 d-none d-md-block">
                        <img src="{{asset('images/banner_share.jpg')}}" class="img-fluid" alt=""></div>
                    <div class="col-md-6">
                        <p>Cước phí: <span class="text-orange font-weight-bold">{{$pack->cost}}</span></p>
                        <p></p>
                        {!! $pack->description !!}
                        <p></p>
                        <div>
                            <p>Đăng ký bằng cách gửi tin nhắn SMS theo cú pháp:</p>
                            <p class="text-center"><span
                                        class="text-orange font-weight-bold">{{$pack->name}} {{$user->cellphone}}</span>
                                gửi
                                <span class="text-orange font-weight-bold">{{$user->telephone}}</span></p>
                        </div>
                    </div>
                </div>
                <p class="text-center text-danger font-weight-bold d-md-none">Hoặc nhấn ngày nút đăng ký dưới đây</p>
                <a href="sms:{{$user->telephone}}?&body={{$pack->name}} {{$user->cellphone}}" class="btn btn-warning btn-block d-md-none text-white mb-2" title="{{$pack->name}}">
                    Đăng ký <i class="fas fa-paper-plane"></i>
                </a>
            @endif
        @endif

        @if(!isset($category) && !request()->filled('name'))
            <h2 class="text-center font-weight-bold">Các gói cước nổi bật được nhiều người đăng ký</h2>
        @endif

        <div class="row">
            {{--Package--}}
            @if(isset($packages))
                @foreach($packages as $item)
                    <div class="col-md-4 mb-4">
                        <div class="rounded card mb-2 item border-0">
                            @if($item->type === 1)
                                <div class="hot">
                                    <img style="width: 95%;" src="{{asset('images/hot.png')}}">
                                </div>
                            @endif
                            <div class="card-header bg-viettel text-white text-center p-2 font-weight-bold">
                                {{$item->name}}
                            </div>
                            <div class="caption">
                                <div class="item-desc m-2 text-center">
                                    {!! $item->summary !!}
                                </div>
                            </div>
                            <div class="price text-center font-weight-bold p-2">{{$item->cost}}</div>
                            <div class="text-center m-3">
                                <p><span
                                            class="font-weight-bold color-viettel">{!! $item->name !!} {{$user->cellphone}}</span>
                                    gửi
                                    <span class="font-weight-bold color-viettel">{{$user->telephone}}</span>
                                </p>
                                <div class="d-none d-sm-block">
                                    <button type="button" class="btn btn-warning btn-register text-white"
                                            data-toggle="modal"
                                            data-target="#{{$item->name}}">Đăng ký <i class="fas fa-paper-plane"></i>
                                    </button>
                                </div>

                                <a href="sms:{{$user->telephone}}?&body={{$item->name}} {{$user->cellphone}}"
                                   type="button"
                                   class="btn btn-warning btn-register text-white d-sm-none">
                                    Đăng ký <i class="fas fa-paper-plane"></i>
                                </a>
                            </div>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn rounded-0 py-3 btn-info text-white" data-toggle="modal"
                                        data-target="#{{$item->name}}"><i class="fas fa-eye"></i> Xem
                                </button>
                                <a href="{{route('package.show', ['package' => strtolower($item->name)])}}"
                                   type="button" class="btn rounded-0 py-3 btn-success">
                                    <i class="fas fa-newspaper"></i> Chi tiết
                                </a>
                            </div>
                        </div>
                    </div>
                    {{--            modal --}}
                    <div class="modal fade" id="{{$item->name}}" tabindex="-1" role="dialog"
                         aria-labelledby="ModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title font-weight-bold" id="ModalLabel">{{$item->name}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Cước phí: <span class="text-orange font-weight-bold">{{$item->cost}}</span></p>
                                    <div>
                                        <p></p>
                                        {!! $item->description !!}
                                        <p></p>
                                        <p>Đăng ký bằng cách gửi tin nhắn SMS theo cú pháp:</p>
                                        <p class="text-center">
                                            <span
                                                    class="text-orange font-weight-bold">{{$item->name}} {{$user->cellphone}}</span>
                                            gửi
                                            <span class="text-orange font-weight-bold">{{$user->telephone}}</span></p>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a href="sms:{{$user->telephone}}?&body={{$item->name}} {{$user->cellphone}}" class="btn btn-warning d-md-none text-white" title="{{$item->name}}">
                                        Đăng ký <i class="fas fa-paper-plane"></i>
                                    </a>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
        {{-- Footer--}}
        <h2 class="text-center mt-3">LÀM THẾ NÀO ĐỂ ĐĂNG KÝ ĐƯỢC GÓI DATA MỚI NHẤT CỦA VIETTEL</h2>
        <div>
            <p>Đây là kênh đăng ký trọn gói VIETTEL thông dụng nhất qua tin nhắn, quý khách hàng sẽ lựa chọn gói
                (nhà
                mạng chỉ có duy nhất gói 4G nhưng lại dùng chung cho các thuê bao, dòng máy <b>3G, 4G, 5G</b>) phù
                hợp
                với mình và đăng ký trực tiếp trên <b><em>Website</em></b> nhấn vào nút <b>Đăng ký</b> khi đó
                <b><em>Smatphone</em></b>
                chuyển về mục gửi tin nhắn quý khách chỉ cần nhấn gửi tin đi là đã đăng ký thành công gói cước theo
                yêu
                cầu (điều kiện là trong tài khoản của quý khách có số tiền lớn hơn hoặc bằng giá trị của gói muốn
                đăng
                ký), hoặc quý khách vào mục tin nhắn soạn cú pháp: <strong>Tên gói cước 359030028</strong> gửi
                <strong>9123</strong>
            </p>

            <p>Ví dụ: <strong>V120 359030028</strong> GỬI <strong>9123</strong></p>

            <p><b><em>Trong đó:</em></b><br>

                * Tên gói cước: Là tên gói cước mà quý khách muốn đăng ký (V120)<br>

                * 359030028: Là mã kích hoạt khuyến mại của Viettel<br>

                * 9123: Là tổng đài đăng ký các dịch vụ trọn gói của Viettel</p>

            <p>Lưu ý: Tin nhắn đến 9123 là miễn phí. Hệ thống chỉ tính tiền gói cước đăng ký, tài khoản chính phải
                bằng
                hoặc lớn hơn gói cước cần đăng ký, nếu đăng ký không thành công sẽ không bị trừ tiền.</p>

            <p>Chân thành cảm ơn quý khách đã đăng ký sử dụng dịch vụ của Viettel!</p>
        </div>
    </div>
@endsection
