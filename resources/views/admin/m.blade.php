<!-- resources/views/transactions/index.blade.php -->


@section('content')
    <div class="container">
        <h1>Transactions</h1>
        <a href="{{ route('transactions.create') }}" class="btn btn-primary">Create Transaction</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Destination</th>
                    <th>Amount</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transactions as $transaction)
                    <tr>
                        <td>{{ $transaction->id }}</td>
                        <td>{{ $transaction->destination }}</td>
                        <td>{{ $transaction->amount }}</td>
                        <td>
                            <a href="{{ route('transactions.show', $transaction->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('transactions.edit', $transaction->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('transactions.destroy', $transaction->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
