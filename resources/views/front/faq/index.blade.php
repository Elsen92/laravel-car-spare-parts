@extends('front.layouts.app')

@section('content')
    <div class="container my-5">
        <!-- Başlıq -->
        <div class="text-center mb-4">
            <h1 class="display-4">Ən çox verilən suallar</h1>
            <p class="lead">Siz soruşmadan biz deyək</p>
        </div>

        <!-- FAQ Bölməsi -->
        <div class="accordion" id="faqAccordion">
            <!-- 11 input sahəsi -->
            <div class="mb-3">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-8">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Unvanınız" aria-label="Sual" id="question1">
                            <button class="btn btn-warning text-white py-2 px-3 rounded" type="button" id="btn1" onclick="toggleAnswer(1)" style="width: 100px; height: 50px; text-align: center;">Cavab</button>
                        </div>
                        <div id="answer1" class="mt-2" style="display:none;">
                            <p>Əcəmi Naxçıvani 169, "Elit" ticarət və əyləncə mərkəzinin qarşısı</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-8">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Əlaqə nömrəsi" aria-label="Sual" id="question2">
                            <button class="btn btn-warning text-white py-2 px-3 rounded" type="button" id="btn2" onclick="toggleAnswer(2)" style="width: 100px; height: 50px; text-align: center;">Cavab</button>
                        </div>
                        <div id="answer2" class="mt-2" style="display:none;">
                            <p>Ehtiyat hissələri üçün: 055 300-27-56, 070 300-27-56</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-8">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Orijinal ehtiyyat hissələrini əldə edə bilərəm?" aria-label="Sual" id="question3">
                            <button class="btn btn-warning text-white py-2 px-3 rounded" type="button" id="btn3" onclick="toggleAnswer(3)" style="width: 100px; height: 50px; text-align: center;">Cavab</button>
                        </div>
                        <div id="answer3" class="mt-2" style="display:none;">
                            <p>SOLO AVTO ehtiyat hisseleri mərkəzində Yapon (Nissan, Toyota, Mitsubishi, Infiniti, Lexus) ve Koreya (Hyundai və Kia) avtomobillər üçün orijinal ehtiyat hissələrinin satışı mövcuddur. Ehtiyac duyulduğu halda peşəkar satış komandamız həmişə müştərilərə ehtiyat hissələri seçimində məsləhət verməyə hazırdır..</p>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Burada qalan inputlar üçün eyni düzəlişləri edin -->
        </div>
    </div>

    <script>
        function toggleAnswer(questionNumber) {
            const answer = document.getElementById('answer' + questionNumber);
            if (answer.style.display === "none" || answer.style.display === "") {
                answer.style.display = "block";
            } else {
                answer.style.display = "none";
            }
        }
    </script>
@endsection
