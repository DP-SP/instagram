<div>


    {{--name: {{ $pro->profile_name}} <br>
     description: {{$pro->description }}--}}
     <div class="flex items-baseline w-screen h-10 pl-4 bg-gray-200">

            <div>
             <img src="https://thumbs.dreamstime.com/b/teamwork-group-friends
                -icon-vector-illustration-teamwork-group-friends-icon-118637039.jpg"
                    class="w-5 h-5 mt-2 ml-40 rounded-full ">
            </div>
            <div class="h-5 pb-2 pl-2 mt-2 ml-2 text-left border-l-2 border-gray-800">
                Frends4Ever</div>
        </div>
    <div class="flex items-start">
        <div>

            <img src="{{asset('storage/profile-pic/'.$pro->profile_image_path)}}"
                class="w-20 h-20 ml-20 ">
        </div>
        <div class="flex-col w-40 h-5 pl-20 mt-2">
           <h1> <b>{{ $pro->profile_name}} </b></h1>
           <div class="flex items-center mt-2">
            <div class="text-xs"><strong>{{$pro->user->images->count()}}</strong>Posts</div>
            <div class="pl-2 text-xs"><strong>23k</strong>Followers</div>
            <div class="pl-2 text-xs"><strong>212</strong>Followings</div>
        </div>

        </div>

    </div>
    <div class="text-xs text-black ml-60"><p>{{$pro->description }}</p></div>

<div class="flex">
    @foreach ($pro->user->images as $image)
        <div class="px-6 py-4">

           <img src="{{asset('storage/post-pic/'.$image->image_path)}}"
           class="ml-20 w-50 h-50 ">
        </div>
       @endforeach

</div>

    <div>  </div>
</div>
</div>
