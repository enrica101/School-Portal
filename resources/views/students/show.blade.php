<x-layout>
<div class="container">
    
    <div class="default studentInfo" id="studentInfo">
        <h1>
            {{$student['studfname']}} {{$student['studlname']}}
        </h1>
        <img src="{{asset('img/default-img.png')}}" alt="">
        <h4>
            ID: {{ $student['studid'] }} 
        </h4>
        <h4> 
            Year: {{ $student['studyear'] }}
        </h4><br>
        <h3>
            {{ $student['studprogram'] }}
        </h3><br>
        <p>
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
        </p>
        {{-- Edit Button --}}
        <a href="/students/{{$student['studid']}}/edit"> 
            <button class="btn btn-edit">
                Edit Info
            </button> 
        </a>
        
        {{-- Delete Button --}}
        <button class="btn dark btn-delete">Delete</button>
        <x-modal :student="$student"/>
        
        <script src="/js/script.js"></script>
    </div>
</div>
</x-layout>