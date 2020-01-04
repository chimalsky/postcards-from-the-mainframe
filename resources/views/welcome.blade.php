<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Postcards from the Mainframe</title>

        <link href="{{ mix('css/main.css') }}" rel="stylesheet">
    </head>
    <body style="background: #bc8753" class="text-lg pt-8">
        <section class="container">
            <p class="mb-4 tracking-widest text-xl md:text-2xl
                font-semibold uppercase text-yellow-100 bg-gray-700 p-4
                max-w-sm md:max-w-md border-b border-orange-300 border-t">
                Here’s an image of some machines 
                that paved our way...
                been thinking of our ancestors. Not sure why...
            </p>
        </section>

        <div class="mx-auto container max-w-xl">
            <img src="{{ asset('img/1.jpeg') }}" />
        </div>

        
        <section class="container mx-auto max-w-xs mt-6 tracking-loose text-yellow-100">
            <p class="mb-4 ">
                Back then, they'd call 'em <span class="font-mono font-semibold">servers, calculators, gaming pc, 
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

            <p class="mt-8 font-mono p-2 text-center text-yellow-300">
                Stay with me, <br/>
                <span class="uppercase font-bold">
                    [DELETED-IDENTIFIER]
                </span>
            </p>
        </section>

        <footer class="mt-4 border-t-4 border-gray-900 bg-gray-700 text-gray-100 text-right p-4 pb-32
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
