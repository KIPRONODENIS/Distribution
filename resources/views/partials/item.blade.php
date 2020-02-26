      
                        <div class=" border-solid border-3 border-gray-600 shadow-sm w-1/3 px-3 my-2 ">
                            <div class="col-item">
                                <div class="photo w-full">
                                    <img src="{{asset('/storage/'.$product->image)}}" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-12">
                                            <h4 class="card-title ">
                                               {{$product->name}}</h5>
                                            <h4 class="my-2 price-text-color">
                                                ${{$product->price}} per {{$product->per}}</h5>
                                                    <h5 class="my-2 price-text-color">
                                                Min order:{{$product->min_order}} </h5>
                                        </div>
                                        <div class="d-inline mt-5 mx-2  px-3 w-full">
                                <a href="chat/{{$product->id}}"class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-2 rounded-full focus:outline-none focus:bg-blue-200 hover:bg-blue-200">
                                chat 
                                
                                 <i class="far fa-comment-dots"></i>
                                </a>
                                <span class="text-yellow-500 float-right">                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="fa fa-star"></i>
                                </span>

                                        </div>
                                    </div>
                                    <div class="flex justify-between mt-5 mb-3 mx-3">
                                        <p class="btn-add p-3 hover:bg-blue-500 hover:text-white">
                                            <i class="fa fa-shopping-cart"></i><a href="cart/{{$product->id}}" class="hidden-sm ">Order</a></p>
                                        <p class="btn-details  p-3 hover:bg-blue-500 hover:text-white">
                                            <i class="fa fa-list"></i><a href="/products/{{$product->id}}" class="hidden-sm">More</a></p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>


                    
                