@extends('layout.master')
@section('content')	
	<h1 class="my-4">校外教學心得回饋
		<small>&nbsp; All List</small>
	</h1>
	<div class="row">
	@foreach($arrLearn as $learn )
	<div class="col-lg-4 col-md-4 col-sm-6 portfolio-item">
			<div class="card h-100">
				<a href="{{$learn['learnURL']}}"><img class="card-img-top" src="{{$learn['learnImgURL']}}" alt=""></a>
				<div class="card-body">
					<h4 class="card-title">
						<a href="{{$learn['learnURL']}}" target="_blank">{{$learn['learnName']}}</a>
					</h4>
					<p class="card-text">講者:
						<a href="{{$learn['learnTeacherURL']}}" target="_blank"> {{$learn['learnTeacher']}}</a> 
					</p>
					<p class="card-text">上課人員: 
						@foreach($learn['learnStudent'] as $student )
							{{$student}}&nbsp
						@endforeach
					</p>
					<p class="card-text">心得分享: 
						@foreach($learn['learnStudentShare'] as $studentShare )
							<a href="{{$studentShare['url']}}" target="_blank"> {{$studentShare['txt']}}</a> 
						@endforeach
					</p>
					<p class="card-text">講者分享:</p>
					@foreach($learn['learnTeacherShare'] as $teacherShare )
						<p class="card-text"><a href="{{$teacherShare['url']}}" target="_blank"> {{$teacherShare['txt']}}</a></p>
					@endforeach

				</div>
			</div>
		</div>
	@endforeach
	</div>
@endsection
