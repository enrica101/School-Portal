<x-layout>
    <div class="container">
        <div class="edit">
            <h1>Edit Student Information</h1>
            <form method="POST" action="/students/{{$student->studid}}" class="default edit">
                {{-- stops cross site scripting attacks @csrf --}}
                @csrf
                <label for="studid">Student ID*</label>
                <input type="text" name="studid" id="studid" value="{{$student->studid}}" readonly>

                <label for="studfname">First Name*</label>
                <input type="text" name="studfname" id="studfname" value="{{$student->studfname}}">
                    @error('studfname')
                        <small>The first name field should not be empty.</small>
                    @enderror

                <label for="studmname">Middle Name</label>
                <input type="text" name="studmname" id="studmname" value="{{$student->studmname}}">

                <label for="studlname">Last Name*</label>
                <input type="text" name="studlname" id="studlname" value="{{$student->studlname}}">
                    @error('studlname')
                        <small>The last name field should not be empty.</small>
                    @enderror
    
                <label for="studprogram">
                    Program*</label>
                <select name="studprogram" id="studprogram">
                    @php
                        $count = 1;
                    @endphp
                    @foreach($programs as $program)
                        @if(($count == 1) and ($student['studprogram'] <> $program['prog_sname']))
                            <option value="{{ $program['prog_sname'] }}" selected>{{ $program['prog_fname'] }}</option>  
                        @elseif($student['studprogram'] === $program['prog_sname'])
                            <option value="{{ $program['prog_sname'] }}" selected>{{ $program['prog_fname'] }}</option>     
                        @else
                            <option value="{{ $program['prog_sname'] }}">{{ $program['prog_fname']}}</option>
                        @endif
                        @php
                            $count++;
                        @endphp
                    @endforeach
                </select>
                
                <br>
                <label for="studyear">Year*</label>
                <select name="studyear" id="studyear">
                    @php
                        $count = 1; 
                    @endphp
                    @foreach($years as $number => $words)
                        @if(($count == 1) and ($student['studyear'] <> $number))
                            <option value="{{ $number }}" selected>{{ $words }}</option>   
                        @elseif($student['studyear'] == $number)    
                            <option value="{{ $number }}" selected>{{ $words }}</option>  
                        @else
                            <option value="{{ $number }}">{{ $words }}</option>
                        @endif
                        @php
                             $count++; 
                        @endphp
                    @endforeach
                </select>
                <input type="submit" value="Update Info"><br>
                <u><a href="/index">Cancel</a></u>
            </form>
        </div>
    </div>
</x-layout>