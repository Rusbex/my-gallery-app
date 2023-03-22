@extends('layout')
@section('content')
    <main>
        <div class="container">
            <h3>Как я сделал, пошаговая инструкция</h3>
            <br>
            <ol>
                <li>Регистрация и получение ключа в unsplach <a href="https://unsplash.com/documentation">здесь</a></li>
                <br><br>
                <li>В servisec.php, прописать<br>
                    <code>'unsplash' => [<br>
                    'key' => env('UNSPLASH_ACCESS_KEY'), ],
                    </code>
                </li>
                <br><br>
                <li>В env, прописать
                    <p>UNSPLASH_ACCESS_KEY=ключ</p>
                </li>
                <br><br>
                <li>Создать Controller
                    <p>GalleryController</p>
                </li>
                <br><br>
                <li>Прописать в GalleryController <br>
                    <code>public function index()
                    {<br>
                    $response = Http::get('https://api.unsplash.com/photos', [<br>
                    'client_id' => config('services.unsplash.key'),<br>
                    'per_page' => 15, ]);<br>
                        <br>
                    $photos = $response->json();<br>
                    //        dd($photos); // включить для отладки<br>

                    return view('home', [<br>
                    'photos' => $photos,]);}
                    </code>
                </li>
                <br><br>
                <li>
                    Вывод изображений на строницу blade<br>
                    <code>
                         @ foreach ($photos as $photo)<br>
                       img class="card-img-top" src="isset($photo['urls']['regular']) ? $photo['urls']['regular'] : '' }}" alt="isset($photo['alt_description']) ? $photo['alt_description'] : '' }}">
                        <br>@ endforeach
                    </code>
                </li>
            </ol>


        </div>
    </main>
@endsection
