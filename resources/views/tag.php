<form method="POST" action="{{ route('save-data') }}">
    @csrf
    <label>Name:</label>
    <input type="text" name="data[0][name]">

    <label>Email:</label>
    <input type="email" name="data[0][email]">

    <label>Phone:</label>
    <input type="text" name="data[0][phone]">

    <label>Address:</label>
    <input type="text" name="data[0][address]">

    <label>Date of Birth:</label>
    <input type="date" name="data[0][dob]">

    <hr>

    <label>Name:</label>
    <input type="text" name="data[1][name]">

    <label>Email:</label>
    <input type="email" name="data[1][email]">

    <label>Phone:</label>
    <input type="text" name="data[1][phone]">

    <label>Address:</label>
    <input type="text" name="data[1][address]">

    <label>Date of Birth:</label>
    <input type="date" name="data[1][dob]">

    <button type="submit">Save</button>
</form>

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;

class DataController extends Controller
{
    public function store(Request $request)
    {
        // validate the form data
        $validatedData = $request->validate([
            'data.*.name' => 'required',
            'data.*.email' => 'required|email',
            'data.*.phone' => 'required',
            'data.*.address' => 'required',
            'data.*.dob' => 'required|date',
        ]);

        // save the form data to the database
        foreach ($validatedData['data'] as $data) {
            Data::create($data);
        }

        // redirect the user back to the form with a success message
        return redirect()->back()->with('success', 'Data saved successfully.');
    }
}
