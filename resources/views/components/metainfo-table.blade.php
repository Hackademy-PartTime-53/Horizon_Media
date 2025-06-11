<table class="table table-striped table-hover mb-5">
    <thead class="table-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">N. di articoli collegati</th>
            <th scope="col">Aggiorna</th>
            <th scope="col">Cancella</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($metaInfos as $metaInfo)
        <tr>
            <th scope="row">{{ $metaInfo->id }}</th>
            <td>{{ $metaInfo->name }}</td>
            <td>{{ count($metaInfo->articles) }}</td>

            @if ($metaType == 'tags')
                <td>
                    <form action="{{ route('admin.editTag', ['tag' => $metaInfo]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="text" value="{{ $metaInfo->name }}" name="name" placeholder="Nuovo nome tag" class="form-control w-50 d-inline">
                        <button type="submit" class="btn btn-secondary">Aggiorna</button>
                    </form>
                </td>
                <td>
                    <form action="{{ route('admin.deleteTag', ['tag' => $metaInfo]) }}" method="POST" class="delete-form">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" data-tag-name="{{ $metaInfo->name }}" >Elimina</button>
                    </form>
                </td>
            @elseif ($metaType == 'categorie')
                <td>
                    <form action="{{ route('admin.editCategory', ['category' => $metaInfo]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="text" value="{{ $metaInfo->name }}" name="name" placeholder="Nuovo nome categoria" class="form-control w-50 d-inline">
                        <button type="submit" class="btn btn-secondary">Aggiorna</button>
                    </form>
                </td>
                <td>
                    <form action="{{ route('admin.deleteCategory', ['category' => $metaInfo]) }}" method="POST" class="delete-form">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" data-tag-name="{{ $metaInfo->name }}" >Elimina</button>
                    </form>
                </td>
            @endif
        </tr>
        @endforeach
    </tbody>
</table>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const deleteForms = document.querySelectorAll('.delete-form');

        deleteForms.forEach(form => {
            form.addEventListener('submit', function (event) {
                event.preventDefault(); // blocca l'invio per ora

                const button = form.querySelector('.delete-button');
                const tagName = button?.dataset.tagName || 'questo elemento';

                Swal.fire({
                    title: `Eliminare "${tagName}"?`,
                    text: "Questa azione è irreversibile!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#6c757d',
                    confirmButtonText: 'Sì, elimina',
                    cancelButtonText: 'Annulla'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit(); // ora invia davvero
                    }
                });
            });
        });
    });
</script>
<!-- Includi SweetAlert2 (CDN) -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


