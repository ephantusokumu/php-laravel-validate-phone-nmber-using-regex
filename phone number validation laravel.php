Two functions that validates the phone numbers

Validates the numbers to be atleast 10 digits

//This is a snippet of my controller - code


public function store(Request $request)
    {
        $request->validate([
                'name' => 'required',
                'phone' => 'required|digits:10',
                'email' => 'required|email|unique:users'
            ]);

        $input = $request->all();
        $user = User::create($input);

        return back()->with('success', 'User created successfully.');
    }
	
	
	
//Use of Regex to weed out alphanumeric and other sections of user inputs

public function store(Request $request)

 {
        $request->validate([
                'name' => 'required',
                'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
                'email' => 'required|email|unique:users'
            ]);

        $input = $request->all();
        $user = User::create($input);

        return back()->with('success', 'User created successfully.');
    }
	