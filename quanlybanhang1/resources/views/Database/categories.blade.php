<table>
    <tr>
        <th> id </th>
        <th> id </th>
        <th> id </th>
    </tr>

   @foreach($categories as $items ) {
       <tr>
            <td> {{$items->id}} </td>
            <td> {{$items->name}}</td>
            <td> {{$items->tag}}</td>
       </tr>
   @endforeach

</table>