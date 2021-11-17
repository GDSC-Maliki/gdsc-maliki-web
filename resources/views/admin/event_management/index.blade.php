@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            Event Management (QEP)
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class=" table table-bordered table-striped table-hover datatable datatable-Event">
                    <thead>
                        <tr>
                            <th width="10">

                            </th>
                            <th>
                                ID
                            </th>
                            <th>
                                Email
                            </th>
                            <th>
                                Nama Lengkap
                            </th>
                            <th>
                                Instansi
                            </th>
                            <th>
                                Pernah / Belum
                            </th>
                            <th>
                                Bersedia / Tidak
                            </th>
                            <th>
                                Kendala
                            </th>
                            <th>
                                Harapan
                            </th>
                            <th>
                                No. WA
                            </th>
                            <th>
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($eventManage as $key => $event)
                            <tr data-entry-id="{{ $event->id }}">
                                <td>

                                </td>
                                <td>
                                    {{ $event->id ?? '' }}
                                </td>
                                <td>
                                    {{ $event->email ?? '' }}
                                </td>
                                <td>
                                    {{ $event->nama ?? '' }}
                                </td>
                                <td>
                                    {{ $event->instansi ?? '' }}
                                </td>
                                <td>
                                    {{ $event->pernahbelum ?? '' }}
                                </td>
                                <td>
                                    {{ $event->bersedia ?? '' }}
                                </td>
                                <td>
                                    {{ $event->kendala ?? '' }}
                                </td>
                                <td>
                                    {{ $event->harapan ?? '' }}
                                </td>
                                <td>
                                    {{ $event->nowa ?? '' }}
                                </td>
                                <td>

                                    <form action="{{ route('admin.eventmanagement.massDestroy', $event->id) }}"
                                        method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');"
                                        style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger"
                                            value="{{ trans('global.delete') }}">
                                    </form>

                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


        </div>
    </div>
@endsection
@section('scripts')
    @parent
    <script>
        $(function() {
            let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
            @can('event_delete')
                let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
                let deleteButton = {
                text: deleteButtonTrans,
                url: "{{ route('admin.events.massDestroy') }}",
                className: 'btn-danger',
                action: function (e, dt, node, config) {
                var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
                return $(entry).data('entry-id')
                });
            
                if (ids.length === 0) {
                alert('{{ trans('global.datatables.zero_selected') }}')
            
                return
                }
            
                if (confirm('{{ trans('global.areYouSure') }}')) {
                $.ajax({
                headers: {'x-csrf-token': _token},
                method: 'POST',
                url: config.url,
                data: { ids: ids, _method: 'DELETE' }})
                .done(function () { location.reload() })
                }
                }
                }
                dtButtons.push(deleteButton)
            @endcan

            $.extend(true, $.fn.dataTable.defaults, {
                order: [
                    [1, 'desc']
                ],
                pageLength: 100,
            });
            $('.datatable-Event:not(.ajaxTable)').DataTable({
                buttons: dtButtons
            })
            $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
                $($.fn.dataTable.tables(true)).DataTable()
                    .columns.adjust();
            });
        })
    </script>
@endsection
