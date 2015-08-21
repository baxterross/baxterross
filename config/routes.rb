Baxterross::Application.routes.draw do
  get '/' => 'static#baxterross'
  get '/tautology' => 'static#tautology'
  get '/sidebench' => 'static#sidebench'
  get '/validation-callback' => 'static#validation'
end
