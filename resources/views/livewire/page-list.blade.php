<x-box class="border-0 shadow-sm rounded">
        <table class="table table-hover table-responsive-sm">
            <tr>
                <th>Title</th>
                <th>Slug</th>
                <th></th>
                <th></th>
            </tr>
            <tbody>
                @forelse($pages as $page)
                <tr>
                    <td>{{ $page->title }}</td>
                    <td>{{ $page->slug }}</td>
                    <td><a href="{{ route('frontend.pages.show', $page) }}" target="_blank">Open</a></td>
                    <td class="text-right">
                        <div>
                            <a type="button" class="text-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="svg-icon svg-baseline">
                                    @include('svg.verticle-dots')
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="{{ route('backend.pages.create-or-edit', ['slug' => $page->slug]) }}">Edit</a>

                                @if(!$page->trashed() )
                                <form class="form-inline d-inline" action="{{ route('backend.pages.destroy', $page) }}" onsubmit="return confirm('Are you sure to delete ?')" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="dropdown-item">Trash</button>
                                </form>
                                @endif

                                @if ($page->trashed() )
                                <form class="form-inline d-inline" action="{{ route('backend.pages.restore', $page->slug) }}" onsubmit="return confirm('Are you sure to delete ?')" method="POST">
                                    @csrf
                                    @method('patch')
                                    <button type="submit" class="dropdown-item">Restore</button>
                                </form>
                                <form class="form-inline d-inline" action="{{ route('backend.pages.force-delete', $page->slug) }}" onsubmit="return confirm('Are you sure to delete ?')" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="dropdown-item">Delete</button>
                                </form>
                                @endif
                            </div>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="42" class="font-italic text-center">No Record Found</td>
                </tr>
                @endforelse
            </tbody>
        </table>
        <div class="d-flex justify-content-between py-3">
            <div class="mb-3 text-muted">
                Showing records {{ $pages->firstItem() }} - {{ $pages->lastItem() }} of {{ $pages->total() }}
            </div>
            {{ $pages->links() }}
        </div>
</x-box>
