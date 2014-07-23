require 'sinatra/base'

class App < Sinatra::Application
  set :public_folder, './public'

  get '/' do
    erb :index, layout: :layout
  end
end

