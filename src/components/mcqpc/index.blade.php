<style>
    table {
        background: #fff;
        width: 94%;
        border: 0;
    }
    th {
        text-align: left;
        padding: 5px;
        background: rgb(218, 218, 218);
    }
    td {
        border: 1px solid rgb(218, 218, 218);
        padding: 0 5px;
    }
    tr:nth-child(odd) {
        background: rgb(243, 242, 242);
    }
</style>
<table>
    <thead>
        <th style="width:5%;">#</th>
        <th style="width:45%;">Question</th>
        <th style="width:10%;">Answers</th>
        <th style="width:20%;">Created/Updated</th>
        <th style="width:10%;">Actions</th>
    </thead>
    <tbody>
        @php
        $fmt_mcqpc_ques = DB::table('fmt_mcqpc_ques')->get();
        @endphp
        @foreach ($fmt_mcqpc_ques as $que)
        <tr>
            <td>{{$que->id}}</td>
            @php $que_media = DB::table('media')->where('id', $que->media_id)->first() @endphp
            <td>
                {{$que->question}}
            </td>
            @php $fmt_mcqpc_ans = DB::table('fmt_mcqpc_ans')->where('question_id', $que->id)->get() @endphp
            <td>
                <ul>
                    @foreach ($fmt_mcqpc_ans as $ans)
                    <li @if($ans->arrange == 1) style="color:blue;" @endif>
                        <span>{{$ans->answer}}</span>
                    </li>
                    @endforeach
                </ul>
            </td>
            <td>
                <div style="font-size:12px;">
                    <span>Created: </span>
                    {{date('d-n-Y g:i a',strtotime($que->created_at))}}
                </div>
                <div style="font-size:12px;">
                    <span>Updated: </span>
                    {{date('d-n-Y g:i a',strtotime($que->updated_at))}}
                </div>
            </td>
            <td>
                <a style="font-size: 12px; background:#4450f3; color:#fff; border-radius:4px; padding:2px 4px;" href="javascript:void(0);"  onclick="modalMCQPC({{$que->id}})">Edit</a>
                <a style="font-size: 12px; background:#f23939; color:#fff; border-radius:4px; padding:2px 4px;" href="{{route('fmt.mcqpc.delete', $que->id)}}">Delete</a>
            </td>
        </tr>
        <x-mcqpc.edit :message="$que->id"/>
        @endforeach
    </tbody>
</table>
<script>
    function modalMCQPC($id){
        var modal = document.getElementById('modalMCQPC'+$id);
        modal.classList.remove("hidden");
    }
    function closeModalMCQPC($id){
        var modal = document.getElementById('modalMCQPC'+$id);
        modal.classList.add("hidden");
    }
</script>