<x-layout>
    
    <div class="container">
        <div class="s-table">
            <h1 class="text-rcon text-3xl font-bold">Students Record</h1>
            <div class="record">

                @unless(count($students) == 0)
                @forEach($students as $student)

                <x-student-card :student="$student" />

                @endforeach

                @else
                <p>No records.</p>

                @endunless

            </div>
            
        </div>
        <div class="mx-auto p-20px">
            
            {{$students->links()}}
        </div>
    </div>
    <script src="https://cdn.tailwindcss.com"></script>
            <script>
                tailwind.config = {
                    theme: {
                        extend: {
                            colors: {
                                laravel: "#ef3b2d",
                            },
                            fontFamily: {
                                'rcon': ['Roboto Condensed', 'sans-serif']
                            },
                        },
                    },
                };
            </script>
</x-layout>