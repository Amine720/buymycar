@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-7">
            <form action="{{ route('create.car') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="file"><b>Choose Image</b></label>
                    <div class="custom-file">
                        <input type="file" name="images[]" class="pics custom-file-input" accept="image/*" id="file" capture="camera" multiple="multiple" required>
                        <label class="custom-file-label" for="file">Choose file...</label>
                    </div>
                    <div class="list-images"></div>
                </div>
                <div class="form-group">
                    <label for="maker"><b>Make/Model</b></label>
                    <input type="text" name="maker" class="form-control" id="maker" />
                </div>
                <div class="form-group">
                    <label for="year"><b>Year</b></label>
                    <input type="text" name="year" class="form-control" id="year" />
                </div>
                <div class="form-group">
                    <label for="city"><b>City</b></label>
                    <input type="text" name="city" class="form-control" id="city" />
                </div>
                <div class="form-group">
                    <label for="price"><b>Price (DH)</b></label>
                    <input type="text" name="price" class="form-control" id="price" />
                </div>
                <div class="form-group">
                    <label for="mileage"><b>Mileage (KM)</b></label>
                    <input type="text" name="mileage" class="form-control" id="mileage" />
                </div>
                <div class="form-group">
                    <label for="description"><b>Description</b></label>
                    <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="type"><b>Type</b></label>
                    <div class="radio-group">
                        <div class='radio' data-value="suv">SUV</div>
                        <div class='radio' data-value="coupe">Coupe</div>
                        <div class='radio' data-value="sedan">Sedan</div>
                        <div class='radio' data-value="hatch">Hatch</div>
                        <div class='radio' data-value="wagon">Wagon</div>
                        <div class='radio' data-value="pickup">Pickup</div>
                        <div class='radio' data-value="minivan">Minivan</div>
                        <br/>
                        <input type="hidden" name="type" id="radio-value" name="radio-value" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="doors"><b>Doors</b></label>
                    <div>   
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="doors" id="doors" value="2" />
                            <label class="form-check-label" for="doors">
                                2
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="doors" id="doors" value="3" />
                            <label class="form-check-label" for="doors">
                                3
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="doors" id="doors" value="4" />
                            <label class="form-check-label" for="doors">
                                4
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="doors" id="doors" value="5" />
                            <label class="form-check-label" for="doors">
                                5
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="cylinders"><b>Cylinders</b></label>
                    <div>   
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="cylinders" id="cylinders" value="2" />
                            <label class="form-check-label" for="cylinders">
                                2
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="cylinders" id="cylinders" value="3" />
                            <label class="form-check-label" for="cylinders">
                                3
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="cylinders" id="cylinders" value="4" />
                            <label class="form-check-label" for="cylinders">
                                4
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="cylinders" id="cylinders" value="5" />
                            <label class="form-check-label" for="cylinders">
                                5
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="cylinders" id="cylinders" value="6" />
                            <label class="form-check-label" for="cylinders">
                                6
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="cylinders" id="cylinders" value="8" />
                            <label class="form-check-label" for="cylinders">
                                8
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="cylinders" id="cylinders" value="10" />
                            <label class="form-check-label" for="cylinders">
                                10
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="cylinders" id="cylinders" value="12" />
                            <label class="form-check-label" for="cylinders">
                                12
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="cylinders" id="cylinders" value="16" />
                            <label class="form-check-label" for="cylinders">
                                16
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="transmission"><b>Transmission</b></label>
                    <div>   
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="transmission" id="transmission" value="automatic" />
                            <label class="form-check-label" for="transmission">
                                Automatic
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="transmission" id="transmission" value="manual" />
                            <label class="form-check-label" for="transmission">
                                Manual
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="fuel"><b>Fuel</b></label>
                    <div>   
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="fuel" id="fuel" value="diesel" />
                            <label class="form-check-label" for="fuel">
                                Diesel
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="fuel" id="fuel" value="petrol" />
                            <label class="form-check-label" for="fuel">
                                Petrol
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-lg sell-btn">Sell now</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $('.radio-group .radio').click(function(){
            $(this).parent().find('.radio').removeClass('selected');
            $(this).addClass('selected');
            var val = $(this).attr('data-value');
            $(this).parent().find('input').val(val);
        });

        // Show images
        const listImages = document.querySelector('.list-images');
        const pics = document.querySelector('.pics');
        const sellBtn = document.querySelector('.sell-btn');

        const addedImagesList = [];
        pics.addEventListener('change', e => {
            addedImagesList.push(e.target.files[0])
            console.log(addedImagesList)
            var file    = document.querySelector('input[type=file]').files[0];
            var reader  = new FileReader();
            reader.onload = function () {
                var source = reader.result;
                var ima = document.createElement('img');
                ima.src = source;
                ima.width = '150';
                ima.height = '100';
                listImages.appendChild(ima);
            }

            if (file) {
                reader.readAsDataURL(file);
                
            } else {
                preview.src = "";
            }
        });
       
        // sellBtn.addEventListener('click', e => {
        //     fetch('http://127.0.0.1:8000/sell', {
        //         method: 'POST',
        //         headers: {
        //             'Content-Type': 'application/json',
        //         },
        //         body: JSON.stringify(addedImagesList)
        //     }).then(res => {
        //         return res.json()
        //     }).then(data => {
        //         console.log(data)
        //     }).catch(err => {
        //         console.log(err)
        //     })
        // })


    </script>
@endsection

@section('css')
    <style>
        .list-images{
            margin: 15px 0;
        }
        .list-images img{
            margin-left: 9px;
            margin-top: 9px;
        }
        #app{
            overflow: hidden;
        }
        .radio{
            display:inline-block;
            padding: 8px;
            background-color:white;
            border: 1px solid #C60053;
            color: #C60053;
            cursor:pointer;
            margin: 2px 0; 
            border-radius: 7px;
        }

        .radio + .radio{
            margin-left: 6px;
        }

        .radio.selected{
            background-color: #C60053;
            color: white;
        }
        .sell-btn{
            background-color: #C60053;
            color: white;
        }
    </style>
@endsection