@extends('layouts.app')

@section('content')
    @if(Session::has('flash_message'))
      <div class="alert alert-success">
          {{ session('flash_message') }}
      </div>
    @endif
    <div class="container">
      <div class="row">
          <div class="col-md-3 justfy-content-start">
            <aside id="side-menu1" class="p-2 border">
              <div id="item-search">
                  <div><p>商品検索</p></div>
                  <form method='GET' action="/" >
                  @csrf
                    <input type='text' name='keyword'>
                    <input type='submit' value='検索'>
                  </form>
              </div>

              <div id="category-search">
                <div><p>カテゴリー検索</p></div>
                  <form method='POST' action="{{ route('category') }}" >
                    @csrf
                    <select name="category">
                        <option value="">選択してください</option>
                        <option value="1">串焼き</option> 
                        <option value="2">刺身</option>
                        <option value="3">鍋</option>
                        <option value="4">飲み物</option>
                        <option value="5">一品物</option>
                    </select>
                    <button type="submit">検索</button></button>
                  </form>
                    <ul class="list-unstyled">
                      <li><a  href="{{ route('category') }}">串焼き</a></li>
                      <li><a  href="/category_id=2">鍋</a></li>
                      <li><a  href="/category_id=3">飲み物</a></li>
                      <li><a  href="/category_id=4">刺身</a></li>
                      <li><a  href="/category_id=5">一品料理</a></li>
                    </ul>
              </div>

              <div id="contact">
                <p>お問い合わせする</p>
              </div>
            </aside>
          </div>

          <div class="col-md-9">
          <div class="row">
            @foreach ($items as $item)
            <div class="card-group col-md-4 mb-2 justyfy-content-end">
                <div class="card">
                    <div class="card-top" >
                      <p><img src="{{ asset('/storage/images/menu/'.$item->image)}}"></p>
                    </div>
                    <div class="card-body"> 
                      <div class="card-title"><a href="/item/{{ $item->id }}">{{ $item->name }}</a></div>
                      <div class="card-text"><p>{{ $item->price}}円</p></div>
                        <form method="POST" action="cartitem" class="form-inline">
                            {{ csrf_field() }}
                            <select name="quantity" class="form-control col-md-3 mr-1">
                                <option selected>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                            <input type="hidden" name="item_id" value="{{ $item->id }}">
                            <button type="submit" class="btn btn-primary col-md-8">カートに入れる</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
          </div>
          </div>
      </div>
      <div class="row justify-content-center">
          {{ $items->links() }}
      </div>
    </div>
@endsection