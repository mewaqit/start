<select>
    @foreach($channels as $channel)
        <option value="{{$channel->id}}">{{$channel->name}}</option>
    @endforeach
</select>
