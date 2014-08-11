Baxterross::Application.routes.draw do
  get '/' => 'static#baxterross'
  get '/tautology' => 'static#tautology'
end
