@extends('layout')

@section('content')
<div class="container">
    <div class="container">
        <header class="d-flex justify-content-center py-3">
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="{{route('reward.index')}}" class="nav-link active" class="nav-link">Recompensas</a></li>
                <li class="nav-item"><a href="{{route('reward.create')}}" class="nav-link">Criar Recompensa</a></li>
            </ul>
        </header>
    </div>
    <div class="container">
        @if(count($reward) > 0)
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach ($reward as $rew)
                    <div class="col">
                        <div class="card shadow-sm h-100">
                            <div class="d-flex justify-content-center align-items-center bg-secondary text-white card-img-top" style="height: 200px; font-size: 3rem;">
                                <i class="bi bi-trophy-fill"></i>
                            </div>

                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title d-flex justify-content-between align-items-center">
                                    {{ $rew->name }}
                                    <span class="badge bg-warning text-dark">
                                        <i class="bi bi-star-fill me-1"></i>{{ $rew->required_points }} pts
                                    </span>
                                </h5>
                                <p class="card-text flex-grow-1">{{ Str::limit($rew->description, 100) }}</p>

                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <div class="btn-group">
                                        <a href="{{ route('reward.show', $rew->id) }}" class="btn btn-sm btn-outline-secondary">Mostrar</a>
                                        <a href="{{ route('reward.edit', $rew->id) }}" class="btn btn-sm btn-outline-secondary">Editar</a>
                                    </div>
                                    <small class="text-body-secondary">{{ $rew->updated_at->diffForHumans() }}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
             <div class="text-center py-5">
                <i class="bi bi-trophy display-1 text-muted"></i>
                <h3 class="mt-3 text-muted">Nenhuma recompensa encontrada</h3>
                <p class="text-muted">Comece criando a primeira recompensa para os usuários.</p>
                <a href="{{route('reward.create')}}" class="btn btn-primary mt-2">
                    Criar Primeira Recompensa
                </a>
            </div>
        @endif
    </div>
</div>
@endsection