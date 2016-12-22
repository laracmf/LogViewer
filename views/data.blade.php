{!! $paginator->links() !!}
@if($logs)
    <?php $i = 1; ?>
    @foreach($logs as $log)
        <div class="alert">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="log log-{{ $log['level'] }}">
                        <h4 class="panel-title">
                            @if($log['stack'] !== "\n")
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                   href="#collapse-{{ $i }}">
                                    @endif
                                    {{ $log['header'] }}
                                </a>
                        </h4>
                    </div>
                    @if($log['stack'] !== "\n")
                        <div id="collapse-{{ $i }}" class="panel-collapse collapse">
                            <div class="panel-body">
                                <pre>
                                    {{ $log['stack'] }}
                                </pre>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <?php $i++; ?>
    @endforeach
@else
    <div class="alert alert-danger">There are no log entries within these constraints.</div>
@endif
