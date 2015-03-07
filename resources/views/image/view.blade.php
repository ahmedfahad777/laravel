{!! Form::open(array('url' => 'user/posts', 'files'=> true)) !!}
           <div class="form-group">
               {!! Form::text('title',Input::old('title'),['class'=>'form-control', 'placeholder' => 'What is your title?']) !!}
           </div>
           <div class="form-group">
              {!! Form::label('image', 'Your Image') !!}
              {!! Form::file('image') !!}
             <p class="help-block">Hey! Please don't upload over 15MB images!</p>
           </div>
           <div class="form-group">
            {!! Form::label('caption', 'Don\'t miss to caption!') !!}
            {!! Form::text('caption',Input::old('caption'),['class'=>'form-control', 'placeholder' => 'Your caption']) !!}
           </div>
           {!! Form::submit('Post  now!',['class'=>'btn btn-info']) !!}
      {!!Form::close() !!}
