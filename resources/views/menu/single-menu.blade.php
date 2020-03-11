@extends('layouts.app')

@section('content')
    <div id="single-menu-page">
        <div class="row">
            <div class="col-sm-12 offset-md-1 col-md-10 offset-lg-2 col-md-8">
                <div class="content-box">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>PIZZA SPECIALTIES</h1>
                        </div>
                        <div class="col-md-6">
                            <div class="item">
                                <div class="title">
                                        <h4>Tomato Basil</h4> <br/>
                                        <span class="price">
                                            $7.75 -  Small 9"<br/>
                                            {{-- <hr>
                                            $12.75 - Medium 12"<br/>
                                            <hr>
                                            $16.00 - Large 16"<br/> --}}
                                        </span> 
                                </div>
                                <div class="description">
                                    <p>Garlic tomato sauce, lots of fresh basil, mozzarella and parmesan cheeses
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item">
                                <div class="title">
                                        <h4>Sav-veg</h4>
                                        <span class="price">
                                            $9.75 -  Small 9"<br/>
                                            {{-- <hr>
                                            $17.25 - Medium 12"<br/>
                                            <hr>
                                            $22.00 - Large 16"<br/> --}}
                                        </span> 
                                </div>
                                <div class="description">
                                    <p>Whole wheat crust with garlic tomato sauce, mushrooms, broccoli, yellow onion, roasted red peppers, sun dried tomatoes, thyme-seasoned ricotta, mozzarella and parmesan cheeses
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item">
                                <div class="title">
                                        <h4>Cajun</h4>
                                        <span class="price">
                                            $10.50 -  Small 9"<br/>
                                            {{-- <hr>
                                            $17.75 - Medium 12"<br/>
                                            <hr>
                                            $24.00 - Large 16"<br/> --}}

                                            {{-- <div class="form-group">
                                                <label for="sizeinput">Size</label>
                                                <select name="sizeinput" class="form-control form-control-lg @error('size') is-invalid @enderror" id="sizeinput">
                                                    <option value="small">Small 9" - $10.50</option>
                                                    <option value="medium">Medium 12" - $17.75</option>
                                                    <option value="3">Large 16" - $24.00</option>
                                                </select>
                                                @error('size')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div> --}}
                                        </span> 
                                </div>
                                <div class="description">
                                    <p>Spicy red pepper sauce, roasted chicken, shrimp, andouille sausage, red onions, green peppers, Gruyère, mozzarella and parmesan cheeses
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item">
                                <div class="title">
                                        <h4>Chicken Florentine</h4>
                                        <span class="price">
                                            $10.50 -  Small 9"<br/>
                                            {{-- <hr>
                                            $17.75 - Medium 12"<br/>
                                            <hr>
                                            $24.00 - Large 16"<br/> --}}
                                        </span>  
                                </div>
                                <div class="description">
                                    <p>Garlic white sauce, roasted chicken, fresh spinach, yellow onions, Gruyère, mozzarella and parmesan cheeses
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection