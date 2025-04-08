@extends('userdash')

@section('content')
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>


<div id="app" class="p-10 bg-opacity-50 w-full block justify-center items-center bg-cover bg-center bg-no-repeat bg-fixed"  style="background-image: url('http://127.0.0.1:8000/images/hardwareequipment.jpg');">
   

    @if($orders->count() > 0)

    <!-- Loading State -->
    <div v-if="loading" class="text-center my-4">
        <p class="text-white text-lg ">Loading orders...</p>
    </div>

    <article class="px-10 py-10 shadow-xl min-h-screen w-full rounded-lg bg-opacity-50 bg-cover bg-center bg-white bg-no-repeat bg-fixed" >
        <a href="/userdashboard" class="flex justify-end"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="black" class="hover:bg-white hover:text-white cursor-pointer bi bi-x-square" viewBox="0 0 16 16">
            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
        </svg></a>

        <div class="mx-auto p-6">
        <div class="card">
        <div class="card-header text-center">
            <h2 class="mb-4 text-[30px] font-semibold text-gray-700 bg-white bg-opacity-50">ᴍʏ ᴏʀᴅᴇʀ(ꜱ)</h2>
            <ul class="nav nav-tabs justify-between md:flex items-center mx-auto md:py-1.5 grow bg-yellow-500 shadow-lg py-2 px-10 rounded-md">
                @foreach(['pending', 'confirmed', 'ship', 'delivered', 'completed', 'canceled', 'return'] as $tab)
                    <li class="nav-item py-1 font-thin">
                        <a onclick="showColor()" class="md:mb-2 nav-link {{ $status == $tab ? 'active' : '' }}" 
                           href="{{ route('my.orders', ['status' => $tab]) }}">
                           {{ ucfirst($tab) }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>

        <!-- Orders List -->
        <div class="card-body">
        
            <div class="row mt-3">
            
                        <div class="col-md-4 flex flex-wrap gap-y-4 justify-between">
                        @foreach ($orders as $order)
        @foreach ($order->details as $detail)
                            <div class="card bg-white py-4 rounded-md shadow-lg px-4">
                            <div class="md:flex  md:space-y-2 md:space-x-4">
                            
                                <div class="card-body sm:block">
                                
                                
                                    <h5 class="font-semibold text-lg">Order Name: {{ $detail->product->name }}</h5>
                                    <p class="text-sm mt-2">Full Name: {{ Auth::user()->fullname }}</p>
                                    <p class="text-sm">Address: {{ Auth::user()->address }}</p>
                                    <p class="text-sm">Price: {{ number_format($detail->product->price, 2) }}</p>
                                    <p class="text-sm">Quantity: {{ $detail->quantity }}</p>
                                    <p class="text-sm mb-4">Status: {{ ucfirst($order->status) }}</p>

                                    @if ($order->status == 'delivered')
                                        <form action="{{ route('orders.update', $order->id) }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="status" value="completed" class="bg-yellow-500 px-3 py-1 border rounded-md shadow-xl flex hover:bg-yellow-600 hover:text-white">
                                            <button type="submit" class="btn btn-warning mt-4 bg-yellow-500 px-3 py-1 border rounded-md shadow-xl flex hover:bg-yellow-600 hover:text-white"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="mt-[1px] mr-2 bi bi-check-circle-fill" viewBox="0 0 16 16">
                                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                            </svg> Order Received</button>
                                        </form>
                                    @endif

                                    @if ($order->status == 'completed')
                                        <form action="{{ route('orders.update', $order->id) }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="status" value="return" class="bg-yellow-500 px-3 py-1 border rounded-md shadow-xl flex hover:bg-yellow-600 hover:text-white">
                                            <button type="submit" onclick="showReturn()" class="btn btn-warning mt-4 bg-yellow-500 px-3 py-1 border rounded-md shadow-xl flex hover:bg-yellow-600 hover:text-white"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="mt-[1px] mr-1 bi bi-arrow-repeat" viewBox="0 0 16 16">
                                            <path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41m-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9"/>
                                            <path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5 5 0 0 0 8 3M3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9z"/>
                                            </svg> Return</button>
                                        </form>
                                    @endif

                                    @if ($order->status == 'pending')
                                    <form action="{{ route('my.orders.remove', $detail->id) }}" method="POST">
                                        @csrf
                                        @method('POST')
                                        <button type="submit" onclick="showCancel()" class="bg-yellow-500 px-3 py-1 border rounded-md shadow-xl flex hover:bg-yellow-600 hover:text-white"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bag-x" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M6.146 8.146a.5.5 0 0 1 .708 0L8 9.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 10l1.147 1.146a.5.5 0 0 1-.708.708L8 10.707l-1.146 1.147a.5.5 0 0 1-.708-.708L7.293 10 6.146 8.854a.5.5 0 0 1 0-.708"/>
                                        <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z"/>
                                        </svg><p class=""></p></button>
                                        
                                    </form>
                                    @endif

                                    @if ($order->status == 'canceled')
                                    <form action="{{ route('my.orders.remove', $detail->id) }}" method="POST">
                                        @csrf
                                        @method('POST')
                                        <button type="submit" onclick="showRemove()" class="bg-white px-3 py-1 border rounded-md shadow-xl flex hover:bg-red-500 hover:text-white"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                        <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                                        </svg></button>
                                        
                                    </form>
                                    @endif

                                    @if ($order->status == 'return')
                                    <form action="{{ route('my.orders.remove', $detail->id) }}" method="POST">
                                        @csrf
                                        @method('POST')
                                        <button type="submit" onclick="showRemove()" class="bg-white px-3 py-1 border rounded-md shadow-xl flex hover:bg-red-500 hover:text-white"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                    <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                                    </svg></button>
                                        
                                    </form>
                                    @endif
        
        
        </div>
        <img src="{{ asset('storage/' . $detail->product->photo) }}" class="object-cover md:max-w-[10rem] rigth-0 md:max-h-[12rem] md:min-w-[2rem] md:min-h-[2rem] card-img-top " alt="Product">
        
                                </div>
                            </div>
                            @endforeach
                        @endforeach
                        </div>
                        
            </div>
        </div>
    </div>
        </div>




        
    </article>

    @else
    <div v-if="loading" class="text-center my-4">
        <p class="text-white text-lg ">Loading orders...</p>
    </div>

    <article class="px-10 py-10 shadow-xl w-full rounded-lg bg-opacity-50 h-screen bg-cover bg-center bg-white bg-no-repeat bg-fixed" >
        <a href="/userdashboard" class="flex justify-end"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="hover:bg-gray-600 hover:text-white cursor-pointer bi bi-x-square" viewBox="0 0 16 16">
            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
        </svg></a>

        <div class="mx-auto p-6">
        <div class="card">
        <div class="card-header text-center">
            <h2 class="mb-4 text-[30px] font-semibold text-gray-700 bg-white bg-opacity-50">ᴍʏ ᴏʀᴅᴇʀ(ꜱ)</h2>
            <ul class="nav nav-tabs xl:gap-x-[7.9rem] justify-content-center md:flex items-center mx-auto md:py-1.5 grow bg-yellow-500 shadow-lg py-2 px-10 rounded-md">
                @foreach(['pending', 'confirmed', 'ship', 'delivered', 'completed', 'canceled', 'return'] as $tab)
                    <li class="nav-item py-1">
                        <a class="nav-link {{ $status == $tab ? 'active' : '' }}" 
                           href="{{ route('my.orders', ['status' => $tab]) }}">
                           {{ ucfirst($tab) }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>

        <!-- Orders List -->
        <div class="card-body">
        
            <div class="row mt-3">
            
                        <div class="col-md-4 flex flex-wrap gap-1">
                        @foreach ($orders as $order)
        @foreach ($order->details as $detail)
                            <div class="card bg-white py-4 rounded-md shadow-lg px-4 md:w-1/4 xl:w-[27rem]">
                            <div class="flex space-x-4">
                                
                                <div class="card-body">
                                    
                                    <h5 class="font-semibold text-lg">Order Name: {{ $detail->product->name }}</h5>
                                    <p class="text-sm mt-2">Full Name: {{ Auth::user()->fullname }}</p>
                                    <p class="text-sm">Address: {{ Auth::user()->address }}</p>
                                    <p class="text-sm">Price: {{ number_format($detail->product->price, 2) }}</p>
                                    <p class="text-sm">Quantity: {{ $detail->quantity }}</p>
                                    <p class="text-sm mb-4">Status: {{ ucfirst($order->status) }}</p>

                                    @if ($order->status == 'delivered')
                                        <form action="{{ route('orders.update', $order->id) }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="status" value="completed" class="bg-yellow-500 px-3 py-1 border rounded-md shadow-xl flex hover:bg-yellow-600 hover:text-white">
                                            <button type="submit" class="btn btn-warning mt-4 bg-yellow-500 px-3 py-1 border rounded-md shadow-xl flex hover:bg-yellow-600 hover:text-white"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="mt-[1px] mr-2 bi bi-check-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</svg> Order Received</button>
                                        </form>
                                    @endif

                                    @if ($order->status == 'completed')
                                        <form action="{{ route('orders.update', $order->id) }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="status" value="return" class="bg-yellow-500 px-3 py-1 border rounded-md shadow-xl flex hover:bg-yellow-600 hover:text-white">
                                            <button type="submit" onclick="showReturn()" class="btn btn-warning mt-4 bg-yellow-500 px-3 py-1 border rounded-md shadow-xl flex hover:bg-yellow-600 hover:text-white"> Return</button>
                                        </form>
                                    @endif

                                    @if ($order->status == 'pending')
                                    <form action="{{ route('my.orders.remove', $detail->id) }}" method="POST">
                                        @csrf
                                        @method('POST')
                                        <button type="submit" class="bg-yellow-500 px-3 py-1 border rounded-md shadow-xl flex hover:bg-yellow-600 hover:text-white"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bag-x" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M6.146 8.146a.5.5 0 0 1 .708 0L8 9.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 10l1.147 1.146a.5.5 0 0 1-.708.708L8 10.707l-1.146 1.147a.5.5 0 0 1-.708-.708L7.293 10 6.146 8.854a.5.5 0 0 1 0-.708"/>
  <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z"/>
</svg><p class="ml-2">Remove</p></button>
                                        
                                    </form>
        @endif

        @if ($order->status == 'canceled')
                                    <form action="{{ route('my.orders.remove', $detail->id) }}" method="POST">
                                        @csrf
                                        @method('POST')
                                        <button type="submit" onclick="showRemove()" class="bg-white px-3 py-1 border rounded-md shadow-xl flex hover:bg-red-500 hover:text-white"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
  <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
</svg></button>
                                        
                                    </form>
        @endif

                                    @if ($order->status == 'return')
                                    <form action="{{ route('my.orders.remove', $detail->id) }}" method="POST">
                                        @csrf
                                        @method('POST')
                                        <button type="submit" onclick="showRemove()" class="bg-white px-3 py-1 border rounded-md shadow-xl flex hover:bg-red-500 hover:text-white"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
  <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
</svg></button>
                                        
                                    </form>
        @endif
        
        </div>
        <img src="{{ asset('storage/' . $detail->product->photo) }}" class="object-cover card-img-top md:w-[10rem] h-[10rem]" alt="Product">
                                </div>
                            </div>
                            @endforeach
                        @endforeach
                        </div>
                        
            </div>
        </div>
    </div>
        </div>
        <p class="justify-start flex items-center -mt-4 ml-6">No order(s) found.</p>
        <div class="justify-center flex items-center mt-28 space-x-2">
            
        </div>
    </article>
        




        
    @endif
</div>

<script>
    new Vue({
        el: '#app',
        data: {
            loading: false,
        },
        mounted() {
            this.loading = true;
            setTimeout(() => {
                this.loading = false;
            }, 1500); // simulate loading time
        }
    });
</script>

<script>
    function showCancel() {
        alert('Please confirm to cancel.');
    }
</script>

<script>
    function showReturn() {
        alert('Please confirm to return.');
    }
</script>

<script>
    function showRemove() {
        alert('Please confirm to remove.');
    }
</script>

<script>
    function clickColor() {
        if(clickColor === 'button-click') {
            return 'color:white';
        }
        else {
            return null;
        }
    }
</script>

@endsection