<section class="content">
      @if(Session()->has('SUCCESS'))
        <div class="pt-3">
          <div class="alert alert-success">
            {{ Session()->get('SUCCESS') }}
          </div>
        </div>
      @endif