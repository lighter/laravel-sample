<?php

class AccountController extends \BaseController {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function __construct() {
    if ( !Session::has('login_success') || !Auth::check() ) {
      return Redirect::to('login');
    }
  }

  public function index()
  {
    $accounts = User::all();
    $view = View::make('account.account_list')
      ->with('accounts', $accounts);
    return $view;
  }


  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    $view = View::make('account.create_accout');
    return $view;
  }


  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store()
  {
    $rules = array(
      'email' => 'required|email',
      'password' => 'required|alphaNum|min:3',
      'name' => 'required',
      'username' => 'required'
    );

    $validator = Validator::make(Input::all(), $rules);

    if ($validator->fails()) {
      return Redirect::to('account/create')
        ->withErrors($validator)
        ->withInput(Input::except('password'));
    }
    else {
      $account = new User;
      $account->email = Input::get('email');
      $account->password = Hash::make(Input::get('password'));
      $account->name = Input::get('name');
      $account->username = Input::get('username');
      $account->save();

      Session::flash('message', 'Created success');
      return Redirect::to('account');
    }

  }


  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    $account = User::find($id);
    $view = View::make('account.show')
      ->with('account', $account);
    return $view;
  }


  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    //
  }


  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    //
  }


  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    //
  }


}
