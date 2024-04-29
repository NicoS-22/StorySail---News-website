<x-layout>
    <x-header title="Lavora Con Noi"/>

    <div class="container my-5 p-5">
        <div class="row justify-content-center align-items-center border rounded p-2">
            <div class="col-12 col-md-6">
                <div class="display-block w-100 p-5">
                    <h2 class="accentTxt">Amministratore</h2>
                    <p class="mainTxt parCusLavoraConNoi">L'amministratore si occupa di Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, quae!</p>
                    <h2 class="accentTxt ">Revisore</h2>
                    <p class="mainTxt parCusLavoraConNoi">Il revisore si occupa di Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, quae!</p>
                    <h2 class="accentTxt">Scrittore</h2>
                    <p class="mainTxt parCusLavoraConNoi">lo scrittore si occupa di Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, quae!</p>
                </div>
            </div>

            <div class="col-12 col-md-6">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form class="form-template-1 p-5 my-4 me-2" action="{{route('careers.submit')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="username" class="form-label">Per quale ruolo vuoi candidarti?</label>
                        <select name="role" id="role" class="form-control">
                            <option value="">Scegli una posizione</option>
                            @if (!Auth::user()->is_admin)
                            <option value="admin">Amministratore</option>    
                            @endif
                            @if (!Auth::user()->is_revisor)   
                            <option value="revisor">Revisore</option>
                            @endif
                            @if (!Auth::user()->is_writer)   
                            <option value="writer">Scrittore</option>
                            @endif
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input name="email" type="email" class="form-control lightBg" id="email" value="{{old('email') ?? Auth::user()->email}}">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Parlaci di te</label>
                        <textarea name="message" id="message" cols="30" rows="7" class="form-control">{{old('message')}}</textarea>
                    </div>
                    
                    <div class="mt-2">
                        <button class="btn accentBg btnCus text-uppercase">candidati ora</button>
                    </div>
                </form>
            </div>
        </div>
    </div> 
</x-layout>