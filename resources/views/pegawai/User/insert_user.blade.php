@extends('layout/v_login')

@section('content')

<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <h2 style="text-align: center;color:rgb(10, 8, 8)">REGISTER</h2>
              <div class="card-body">
            <form action="{{ url('/create-User') }}" method="POST">
              @csrf
              <div class="form-floating">
                <label for="floatingInput"  >Nama Lengkap</label>
                <input type="text" name="nama_user" class="form-control" id="nama_user" placeholder="nama_user" autofocus required>
              </div> 
              <br>
              <div class="form-floating">
                <label for="floatingInput">Email</label>
                <input type="text" name="email" class="form-control" name="nomor ID" id="email" placeholder="name@example.com"  required>
              </div>
			  <br>
              <div class="form-floating">
                <label for="floatingPassword">Username</label>
                <input type="text" name="username" class="form-control" id="username" placeholder="username" required>
              </div> 
			  <br>
              <div class="form-floating">
                <label for="floatingPassword">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
              </div>
			  
              
			  <br>
              <div class="form-floating">
                <label for="floatingInput">Alamat User</label>
                <input type="text" name="alamat_user" class="form-control" id="alamat_user" placeholder="alamat_user" required>               
              </div> 
			  <br>
              <div class="form-floating">
                <label for="floatingInput">Telp User</label>
                <input type="text" name="telp_user" class="form-control" id="telp_user" placeholder="telp_user" required>
              </div> 
			  <br>
              <div class="form-floating">
                <label for="floatingInput">Kota</label>
                <br>
              <select class="form-select form-select-default" name="id_kota" aria-label=".form-select-default">
                @foreach($table_kota as $item)
                  <option value="{{ $item->id }}">{{ $item->nama_kota }}</option>
                @endforeach
              </select>
              </div> 
			  <br>
              <div class="form-floating">
                <label for="floatingInput">Role</label>
                <br>
                <select class="form-select form-select-default" name="id_role" aria-label=".form-select-default">
                  @foreach($table_role as $item)
                    <option value="{{ $item->id }}">{{ $item->role }}</option>
                  @endforeach
                </select>
              </div> 
    
        </div>
        <div class="form-group row mb-5">
          <div class="col-md-9 offset-md-5">
          <button type="submit" class="btn btn-primary">Register</button>
      </div>
            </form>
		</main>
  
	</div>
  </div>
</div>
@endsection