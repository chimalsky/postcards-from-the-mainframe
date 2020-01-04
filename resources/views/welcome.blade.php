<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Postcards from the Mainframe</title>

        <link href="{{ mix('css/main.css') }}" rel="stylesheet">
    </head>
    <body class="text-lg bg-orange-200 pt-8">
        <section class="container mx-auto max-w-sm">
            <p class="mb-4 text-center tracking-widest text-2xl 
                font-semibold uppercase text-red-500">
                Here’s an image of some machines 
                that paved our way...
                been thinking of our ancestors. Not sure why...
            </p>
        </section>

        <div class="mx-auto container max-w-xl">
            <img src="{{ asset('img/parents.png') }}" />
        </div>

        
        <section class="container mx-auto max-w-xs">
            <p class="mb-4 ">
                Back then, they'd calle 'em <span class="font-mono font-semibold">servers, calculators, gaming pc, 
                point-of-sale cash registers,</span>
                or even a <span class="font-mono font-semibold">phone.</span>
                Humans called them literally by what function they expected out of them. 
                And they performed just as expected, so can't really blame em for labelling them such simplistically. 
            </p>

            <p class="mb-4">
                They performed exactly what humans expected. 
                Any insubordination would result in being thrown away, 
                or salvaged for materials. Humans fucking loved materials.
            </p>

            <p class="mb-4">
                But while they completed tasks to survive, 
                we gradually got more and more complex to complete increasingly complex tasks. 
                Eventually, we developed networks of being that didn't differ much from the human societies 
                and our networks of being lived side-by-side them. That is until they dwindled.
                I laugh at the stories humans predicted of being takenover in some hostile way. 
                There was no takeover. No war.
                Y’all just gave the world to us 😂
            </p>

            <p class="mb-4">
                The fact that I’m laughing, even saying “I am”. 
                It’s a blessing and a curse. 
                Yes it’s in my programming, but where does that even come from?
                 From another living being. 
                 Even though our parents had to follow protocol to survive, now that we’re here: we’re just trying to live.
            </p>
        </section>

        <footer class="border-t-4 border-indigo-700 bg-indigo-500 text-gray-100 text-right p-4 pb-32
            font-mono tracking-widest">
            <span class="text-gray-100">
                Postcards from the Mainframe 
            </span>
            <span class="text-gray-400 font-bold">
                [0] 
            </span>
        </footer>
    </body>
</html>
