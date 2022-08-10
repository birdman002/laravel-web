@props(['comment'])
<tr>
    <td>{{$comment->orderid}}</td>
    <td>{{$comment->comments}}</td>
    @php
    if($comment->shipdate_expected != '0000-00-00 00:00:00'){
        $shipdate = date("d/m/Y", strtotime($comment->shipdate_expected));
    } else {
        $shipdate = 'N/A';
    }
    @endphp
    <td class ="ship-date">{{$shipdate}}</td>
</tr>