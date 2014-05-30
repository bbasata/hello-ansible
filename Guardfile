# A sample Guardfile
# More info at https://github.com/guard/guard#readme

# Add files and commands to this file, like the example:
#   watch(%r{file/path}) { `command(s)` }
#
#guard :shell do
#  watch(/(.*).yml/) {|m| `ansible-playbook -i farm site.yml` }
#end

# This is an example with all options that you can specify for guard-process
guard 'process', :name => 'name of your process', :command => 'ansible-playbook -i farm site.yml', :env => {"ENV1" => "value 1", "ENV2" => "value 2"}, :stop_signal => "KILL"  do
  watch(/(.*).yml/)
end

