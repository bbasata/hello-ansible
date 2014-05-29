Vagrant.configure("2") do |config|
  config.dns.tld = "box"

  config.vm.define "blue" do |config|
    config.vm.hostname = "blue"
    config.vm.box = "ubuntu"
    config.vm.network :private_network, ip: "192.168.50.2"
  end

  config.vm.define "green" do |config|
    config.vm.hostname = "green"
    config.vm.box = "ubuntu"
    config.vm.network :private_network, ip: "192.168.50.3"
  end

  config.vm.define "orange" do |config|
    config.vm.hostname = "orange"
    config.vm.box = "ubuntu"
    config.vm.network :private_network, ip: "192.168.50.4"
  end

  config.vm.define "purple" do |config|
    config.vm.hostname = "purple"
    config.vm.box = "ubuntu"
    config.vm.network :private_network, ip: "192.168.50.5"
  end

  config.vm.define "chartruse" do |config|
    config.vm.hostname = "chartruse"
    config.vm.box = "ubuntu"
    config.vm.network :private_network, ip: "192.168.50.50"
  end
end
