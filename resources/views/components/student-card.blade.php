@props(['student'])

<a href="/students/{{$student['studid']}}">
    <div class="student-card">
        <img src="{{asset('img/default-img.png')}}" alt="avatar">
        <div class="demographic">
                <h3>{{$student['studfname']}} {{$student['studlname']}}</h3>
            <span>
                <p>
                    <b>ID:</b> 
                    {{$student['studid']}}
                </p>
                <span><b>Year:</b>
                    {{$student['studyear']}}
                </span>
            </span>
            <p>{{$student['studprogram']}}</p>
        </div>
    </div>
    </a>