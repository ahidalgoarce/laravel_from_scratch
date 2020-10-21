# Send Raw Mail

### Controller

The [controller](./controllers.md) is in charge to validate the email value, here in case the email is correct the view will be redirected to a confirmation being shown. In case otherwise, it's should just show an error message.
```php
namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact.show');
    }

    public function store()
    {
        request()->validate(['email' => 'required|email']);

        Mail::to(request('email'))
            ->send(new Contact());

        return redirect(route('contact.show'))
            ->with('message', 'Email sent!');
    }
}
```

### Contact Interface and Forms

Forms are used to get input from the user and submit it to the web server for processing. A form is an HTML tag that contains graphical user interface items such as input box, check boxes radio buttons etc. The form is defined using the ``` <form>...</form> ``` tags and GUI items are defined using form elements such as input.

```php
<form>
    @csrf
    <div class="form-group row">
        <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
        <div class="col-md-6">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
            @enderror
        </div>
    </div>

    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-outline-primary">
            Contact Us
            </button>
        </div>
    </div>
</form>
```


### Errors

The error segment comunicates directly with the variable 'email' to check its value and that also might follow the stablished rules and validations to it.

```php
@error('email')
    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
@enderror
```

### Add to route

Finally add to web.php in routes to access inside contact.

```php
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/contact', 'ContactController@show')->name('contact.show');
Route::post('/contact', 'ContactController@store')->name('contact.store');
```

