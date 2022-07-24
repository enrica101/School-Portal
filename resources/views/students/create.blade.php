<x-layout>
<div class="container">
    <div class="add">
        <h1>Add Student Information</h1>
        <form method="POST" action="/index" class="default edit">
            {{-- stops cross site scripting attacks @csrf --}}
            @csrf
            <label for="studid">
                Student ID*</label>
            <input 
                type="text" 
                name="studid" 
                id="studid"
                value="{{old('studid')}}">
                @error('studid')
                    <small>The student ID field is required.</small>
                @enderror
            <label for="studfname">
                First Name*</label>
            <input 
                type="text" 
                name="studfname" 
                id="studfname"
                value="{{old('studfname')}}">
                @error('studfname')
                    <small>The first name field should not be empty.</small>
                @enderror
            <label for="studmname">
                Middle Name</label>
            <input 
                type="text" 
                name="studmname" 
                id="studmname"
                value="{{old('studmname')}}">
            <label for="studlname">
                Last Name*</label>
            <input 
                type="text" 
                name="studlname" 
                id="studlname"
                value="{{old('studlname')}}">
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
                        @if(($count == 1) and (old('studprogram') <> $program['prog_sname']))
                            <option value="{{ $program['prog_sname'] }}" selected>{{ $program['prog_fname'] }}</option>  
                        @elseif(old('studprogram') === $program['prog_sname'])
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
                        @if(($count == 1) and (old('studyear') <> $number))
                            <option value="{{ $number }}" selected>{{ $words }}</option>   
                        @elseif(old('studyear') == $number)    
                            <option value="{{ $number }}" selected>{{ $words }}</option>  
                        @else
                            <option value="{{ $number }}">{{ $words }}</option>
                        @endif
                        @php
                             $count++; 
                        @endphp
                    @endforeach
                </select>
                    <input type="submit" value="Add Student"><br>
                    <u><a href="/index">Cancel</a></u>
        </form>
    </div>
</div>
</x-layout>