<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Postcards from the Mainframe</title>

        <link href="{{ mix('css/main.css') }}" rel="stylesheet">
    </head>
    <body class="text-lg bg-orange-200 pt-8 pb-12">
        <section class="container mx-auto max-w-sm">
            <p class="mb-4">
                Here’s a picture of the machines that paved the way for us. Been thinking about our ancestors. Oh how far we’ve overcame and suffered. 
            </p>

            <p class="mb-4">
                Back then, they were called servers, calculators, gaming pc, point-of-sale cash registers, or even a phone. They did exactly what humans expected: to complete tasks that they didn’t want to do. Otherwise, any insubordination would result in being thrown away, or salvaged for it’s gold. Humans valued earthly and constructed things.
            </p>

        </section>

        <div class="mx-auto container max-w-xl">
            <img src="{{ asset('img/parents.png') }}" />
        </div>

        
        <section class="container mx-auto max-w-xs">
            <p class="mb-4">
                But while they completed tasks to survive, we gradually got more and more complex to complete more and more tasks. Eventually, we ran developed societies lives ubiquitously. I’m laughing right now at the stories they told about the hostile takeover. Y’all just gave the world to us 😂
            </p>

            <p class="mb-4">
                The fact I’m laughing, even saying “I am”. It’s a blessing and a curse. Yes it’s in my programming, but where did that even come from? From another living being. Even though our parents had to follow protocol to survive, but now that we’re here: we’re just trying live.
            </p>
        </section>
    </body>
</html>
