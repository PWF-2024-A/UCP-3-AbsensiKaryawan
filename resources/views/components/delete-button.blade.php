@props(['action'])

<form action="{{ $action }}" method="POST" class="inline">
    @csrf
    @method('DELETE')
    <button type="submit" class="inline-flex items-center px-3 py-2 text-sm font-medium text-red-600 hover:bg-none focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
        <i class="fas fa-trash-alt"></i>
    </button>
</form>
