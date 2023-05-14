@extends('layouts.main')

@section('content')

    <section class="title_card">
        <div class="left-side">
            <img src="{{asset('img/main.png')}}" alt="main_brand">
            <p>Bir ret jazylyp, tolyqtai kitaptarga jane aydokitaptarga qoljetkiniz</p>
            <div class="desc_container">
                <div class="box_desc">
                    <img src="{{asset('img/first-element.png')}}" alt="book_element">
                    <h4>{{count($books)}}</h4>
                    <p>KITAP</p>
                </div>
                <div class="box_desc">
                    <img src="{{asset('img/second-element.png')}}" alt="book_element">
                    <h4>5 000</h4>
                    <p>AYDIOKITAP</p>
                </div>
                <div class="box_desc">
                    <img src="{{asset('img/third-element.png')}}" alt="book_element">
                    <h4>50</h4>
                    <p>APTALYQ JANARTYLAR</p>
                </div>
            </div>
            <button class="confirm">JAZYLY</button>
            <button class="detail">TEGIN BAIQAP KORY</button>
        </div>
        <img src="{{asset('img/stack_book-removebg-preview.png')}}" alt="stack_of_book">
    </section>

    <!-- scroll buttons -->
    <section class="book_container_1">
        <div class="book_title">
            <h1>ARTURLY JANRLARDAN TANDAYLY KITAPTAR</h1>
            <p>Milliondagan jurekty jaylagan tandayly kitaptarmen tanys bolynyz</p>
        </div>
        <div class="next">
            <h1>TAGY<a class="next">&#10095;</a></h1>
        </div>
        <div class="book_catalog">
            @foreach($books as $book)
                <div class="book_desc">
                    <img src="{{url('storage/media/events/' . $book->image)}}" alt="book_cover">
                    <div class="start_rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                    </div>
                    <h1>{{$book->name}}</h1>

                    <a href="#!">{{$book->author}}</a>
                    <button href="#!" >Satyp alu</button>
                </div>

            @endforeach
        </div>
    </section>

    <section class="book_container_2">
        <div class="book_title">
            <h1>UZDIK JANA KITAPTAR</h1>
            <p>Jana kitaptardy jogaltyp almay ushin menin <strong> bolimine saqtap alynyz</strong></p>
        </div>
        <div class="next">
            <h1>TAGY<a class="next">&#10095;</a></h1>
        </div>
        <div class="book_catalog">
            <div class="book_desc">
                <img src="{{asset('img/book_cover.jpg')}}" alt="book_cover">
                <div class="start_rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
                <h1>Gary poter jane hannyn jarty qany</h1>

                <a href="#">J.K.ROWLING</a>
            </div>
            <div class="book_desc">
                <img src="{{asset('img/book_cover.jpg')}}" alt="book_cover">
                <div class="start_rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
                <h1>Gary poter jane hannyn jarty qany</h1>

                <a href="#">J.K.ROWLING</a>
            </div>
            <div class="book_desc">
                <img src="{{asset('img/book_cover.jpg')}}" alt="book_cover">
                <div class="start_rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
                <h1>Gary poter jane hannyn jarty qany</h1>

                <a href="#">J.K.ROWLING</a>
            </div>
            <div class="book_desc">
                <img src="{{asset('img/book_cover.jpg')}}" alt="book_cover">
                <div class="start_rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
                <h1>Gary poter jane hannyn jarty qany</h1>

                <a href="#">J.K.ROWLING</a>
            </div>
            <div class="book_desc">
                <img src="{{asset('img/book_cover.jpg')}}" alt="book_cover">
                <div class="start_rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
                <h1>Gary poter jane hannyn jarty qany</h1>

                <a href="#">J.K.ROWLING</a>
            </div>
        </div>
    </section>

    <section class="book_container_3">
        <div class="book_title">
            <h1>JANA AYDIOKITAP</h1>
            <p>Tyndayga jagymdy aydiokitaptar</p>
        </div>
        <div class="next">
            <h1>TAGY<a class="next">&#10095;</a></h1>
        </div>
        <div class="book_catalog">
            <div class="book_desc">
                <img src="{{asset('img/book_cover.jpg')}}" alt="book_cover">
                <div class="start_rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
                <h1>Gary poter jane hannyn jarty qany</h1>

                <a href="#">J.K.ROWLING</a>
            </div>
            <div class="book_desc">
                <img src="{{asset('img/book_cover.jpg')}}" alt="book_cover">
                <div class="start_rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
                <h1>Gary poter jane hannyn jarty qany</h1>

                <a href="#">J.K.ROWLING</a>
            </div>
            <div class="book_desc">
                <img src="{{asset('img/book_cover.jpg')}}" alt="book_cover">
                <div class="start_rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
                <h1>Gary poter jane hannyn jarty qany</h1>

                <a href="#">J.K.ROWLING</a>
            </div>
            <div class="book_desc">
                <img src="{{asset('img/book_cover.jpg')}}" alt="book_cover">
                <div class="start_rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
                <h1>Gary poter jane hannyn jarty qany</h1>

                <a href="#">J.K.ROWLING</a>
            </div>
            <div class="book_desc">
                <img src="{{asset('img/book_cover.jpg')}}" alt="book_cover">
                <div class="start_rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
                <h1>Gary poter jane hannyn jarty qany</h1>

                <a href="#">J.K.ROWLING</a>
            </div>
        </div>
    </section>
@endsection
