#!/usr/bin/env ruby

require 'rubygems'
require 'rack'

fastcgi_log = File.open("../log/fastcgi.log", "a")
STDOUT.reopen fastcgi_log
STDERR.reopen fastcgi_log
STDOUT.sync = true

load '../app/app.rb'

builder = Rack::Builder.new do
	map '/' do
		run App.new
	end
end

Rack::Handler::FastCGI.run(builder)
