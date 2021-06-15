<div>
    <div class="overlay">
        <div class="scale"></div>
        <form class="search-box" action="" wire:submit.prevent="clear()">
            <input wire:model="string" wire:keydown="init()" type="text" name="search" placeholder="Search products..." />
            <button id="close" wire:click="clear()">
                <i class="ion-android-close"></i>
            </button>
            <div class="result-container" id="abcdef">
                @foreach ($product as $item)
                    <div class="row search-result">
                        <div class="col-1 search-result-image"><a href="{{ route('product', ['id'=>$item['id']]) }}"><img src="{{ asset('uploads/product/'.$item['image']) }}" alt=""></a></div>
                        <div class="col-11 search-result-name"><a href="{{ route('product', ['id'=>$item['id']]) }}">{{ $item['name'] }}</a></div>
                    </div>
                @endforeach
            </div>
        </form>
        <button class="close"><i class="ion-android-close"></i></button>
    </div>
    <style>
    /* width */
    #abcdef::-webkit-scrollbar {
        width: 20px;
        height: 20px;
        border-radius: 50%
    }

    /* Track */
    #abcdef::-webkit-scrollbar-track {
        background: #f1f1f1;
    }

    /* Handle */
    #abcdef::-webkit-scrollbar-thumb {
        background: #c0bbbb;
    }

    /* Handle on hover */
    #abcdef::-webkit-scrollbar-thumb:hover {
        background: #5a5ac9;
    }
    .result-container{
        height: 350px;
        overflow: hidden;
        overflow-y: auto;
    }
    .search-result{
        margin-top: 5px;
        background: #fff;
    }
    .search-result-name{
        font-size: 25px;
        font-weight: bold;
    }
    </style>
</div>
