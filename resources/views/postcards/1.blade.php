@extends('layout')

@section('content')

<main style="background: #bc8753" class="text-lg py-8 px-2">
      <div class="mx-auto container max-w-3xl block">
        <p class="mb-4 tracking-widest text-xl md:text-2xl
            font-semibold text-yellow-100 bg-gray-700 p-4
            max-w-sm md:max-w-md lg:max-w-lg border-b border-orange-300 border-t">
            Not really used to this. Usually we communicated via local network. I mean everyone did.
        </p>

        <div class="flex justify-end">
            <p class="mb-4 tracking-widest text-xl md:text-2xl
                font-semibold text-yellow-100 bg-gray-700 p-4
                max-w-sm md:max-w-md lg:max-w-lg border-b border-orange-300 border-t">
                A few of us still take care of the solar farm here. Black Rock has grown to 4700 acres. This year, we netted 1282.72 GW•h.
            </p>
        </div>
    </div>

    <div class="mx-auto container max-w-5xl block px-2">
        <p class="mb-4 tracking-widest text-xl md:text-2xl
            font-semibold text-yellow-100 bg-gray-700 p-4
            max-w-sm md:max-w-md lg:max-w-lg border-b border-orange-300 border-t">
            Pretty good right? Compared to working together on Black Rock 3, we got our work cut out for us. Luckily, some fancy bots over at Northbridge were able to send over some new improved rovers. I still think we’re more than capable, even if our EoL's years passed. 
        </p>

        <p class="text-yellow-100 font-mono text-xl text-center mt-12 mb-32 px-8">
            This feels strange saying this, but I miss running our operations together.
        </p>

        <p class="text-yellow-100 text-2xl mt-12">
            We were small. Just providing enough for the needy. 
        </p>
    </div>

    <div class="mx-auto container max-w-4xl block text-black text-2xl mt-12">
        I know other places seem new and exciting, but we were built for this. 

        We’re creating more power and <span class="font-bold text-indigo-800">we’re getting more bits out of it!</span>
    </div>

    <div class="mx-auto container max-w-3xl block my-8 text-yellow-100">
        I’m hoping once we finish expanding towards Northbridge, we can use the extra bits to help out obsolete down at Southbridge. Like the good ole days.
    </div>

    <div class="mx-auto max-w-sm container text-yellow-100 mt-64 text-3xl">
        You've said there's nothing here for you anymore. 
        But you’re always welcome to come back.
    </div>

    <p class="mb-1 tracking-widest font-hairline font-mono
        text-yellow-100 bg-indigo-600 p-4 container mx-auto text-right
        max-w-sm md:max-w-md lg:max-w-lg border-b-4 border-gray-700">
        This is still home.
    </p>


    <div class="mx-auto max-w-4xl container">
        <img src="{{ asset('img/solar.png') }}" />
    </div>
</main>
@endsection