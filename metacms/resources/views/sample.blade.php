@extends('common.layout')
@section('addCSS')
<link href="{{{asset('/assets/css/〇〇.css')}}}" rel="stylesheet">
@stop
@include('common.header')
@section('content')
<table>
  <tr><th>ID</th><th>NAME</th><th>AGE</th></tr>
  <?php foreach($data as $val){ ?>
      <tr>
          <td><?php echo $val->user_id; ?></td>
          <td><?php echo $val->user_name; ?></td>
          <td><?php echo $val->user_age; ?></td>
      </tr>
      <?php } ?>
</table>
@stop
@section('addJS')
<script type="text/javascript" src="{{{asset('/assets/js/〇〇.js')}}}">
@stop
@include('common.footer')