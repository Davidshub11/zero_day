<?php

$IP_Connected = $_SERVER['REMOTE_ADDR'];
$IP_Banned = array(
"^102.12.192.*",
"^102.184.204.*",
"^102.184.208.*",
"^102.184.222.*",
"^102.184.230.*",
"^102.184.242.*",
"^102.184.91.*",
"^102.185.235.*",
"^102.185.34.*",
"^102.185.55.*",
"^102.186.115.*",
"^102.186.127.*",
"^102.186.131.*",
"^102.186.168.*",
"^102.186.196.*",
"^102.186.199.*",
"^102.187.1.*",
"^102.187.47.*",
"^102.187.98.*",
"^102.188.40.*",
"^102.189.112.*",
"^102.189.168.*",
"^102.189.49.*",
"^102.40.108.*",
"^102.40.119.*",
"^102.40.170.*",
"^102.40.212.*",
"^102.40.49.*",
"^102.40.70.*",
"^102.41.22.*",
"^102.8.141.*",
"^102.9.38.*",
"^105.193.21.*",
"^105.198.246.*",
"^105.199.14.*",
"^105.83.251.*",
"^105.83.76.*",
"^105.85.245.*",
"^154.132.47.*",
"^154.141.70.*",
"^154.142.250.*",
"^154.183.153.*",
"^154.183.186.*",
"^154.183.219.*",
"^154.188.81.*",
"^154.188.9.*",
"^154.189.129.*",
"^154.189.75.*",
"^154.189.78.*",
"^154.237.0.*",
"^154.237.116.*",
"^154.237.119.*",
"^154.237.128.*",
"^154.237.132.*",
"^154.237.43.*",
"^154.238.20.*",
"^156.161.255.*",
"^156.172.53.*",
"^156.175.0.*",
"^156.175.139.*",
"^156.175.193.*",
"^156.175.79.*",
"^156.175.88.*",
"^156.178.177.*",
"^156.178.74.*",
"^156.181.150.*",
"^156.194.0.*",
"^156.194.10.*",
"^156.194.12.*",
"^156.194.141.*",
"^156.194.177.*",
"^156.194.22.*",
"^156.194.23.*",
"^156.194.57.*",
"^156.195.126.*",
"^156.195.51.*",
"^156.195.61.*",
"^156.195.72.*",
"^156.195.80.*",
"^156.196.89.*",
"^156.197.102.*",
"^156.197.125.*",
"^156.197.128.*",
"^156.197.255.*",
"^156.198.13.*",
"^156.198.203.*",
"^156.198.48.*",
"^156.198.78.*",
"^156.199.128.*",
"^156.199.174.*",
"^156.199.41.*",
"^156.199.84.*",
"^156.199.87.*",
"^156.200.198.*",
"^156.200.96.*",
"^156.201.207.*",
"^156.201.31.*",
"^156.202.234.*",
"^156.203.166.*",
"^156.203.224.*",
"^156.203.55.*",
"^156.203.56.*",
"^156.203.59.*",
"^156.203.69.*",
"^156.203.77.*",
"^156.203.90.*",
"^156.204.25.*",
"^156.205.225.*",
"^156.205.245.*",
"^156.205.253.*",
"^156.205.80.*",
"^156.206.103.*",
"^156.206.147.*",
"^156.206.175.*",
"^156.206.212.*",
"^156.206.27.*",
"^156.206.6.*",
"^156.207.151.*",
"^156.207.64.*",
"^156.208.130.*",
"^156.208.143.*",
"^156.208.64.*",
"^156.209.204.*",
"^156.209.223.*",
"^156.209.60.*",
"^156.210.130.*",
"^156.210.189.*",
"^156.210.211.*",
"^156.211.189.*",
"^156.211.98.*",
"^156.212.122.*",
"^156.212.166.*",
"^156.212.226.*",
"^156.213.38.*",
"^156.214.200.*",
"^156.214.216.*",
"^156.214.33.*",
"^156.214.72.*",
"^156.214.78.*",
"^156.214.86.*",
"^156.215.144.*",
"^156.216.41.*",
"^156.216.61.*",
"^156.217.17.*",
"^156.217.88.*",
"^156.218.116.*",
"^156.219.165.*",
"^156.219.181.*",
"^156.219.230.*",
"^156.219.49.*",
"^156.220.115.*",
"^156.220.212.*",
"^156.220.253.*",
"^156.221.218.*",
"^156.221.23.*",
"^156.222.95.*",
"^156.223.245.*",
"^196.136.15.*",
"^196.136.2.*",
"^196.138.12.*",
"^196.138.8.*",
"^196.150.145.*",
"^196.152.141.*",
"^196.152.143.*",
"^196.152.145.*",
"^196.152.196.*",
"^196.152.7.*",
"^196.152.73.*",
"^196.153.130.*",
"^196.153.20.*",
"^196.154.6.*",
"^196.154.9.*",
"^196.155.0.*",
"^196.155.8.*",
"^196.157.130.*",
"^196.157.143.*",
"^196.157.146.*",
"^196.157.159.*",
"^196.157.19.*",
"^196.157.21.*",
"^196.157.72.*",
"^196.157.87.*",
"^196.158.0.*",
"^196.158.29.*",
"^196.158.4.*",
"^196.158.69.*",
"^196.158.7.*",
"^196.158.74.*",
"^196.159.136.*",
"^196.159.154.*",
"^196.159.170.*",
"^196.159.6.*",
"^196.159.73.*",
"^196.20.48.*",
"^196.219.93.*",
"^196.221.186.*",
"^196.221.211.*",
"^196.221.245.*",
"^196.221.46.*",
"^196.221.99.*",
"^197.124.182.*",
"^197.127.84.*",
"^197.133.207.*",
"^197.133.240.*",
"^197.135.12.*",
"^197.135.135.*",
"^197.135.224.*",
"^197.160.20.*",
"^197.164.189.*",
"^197.165.135.*",
"^197.192.120.*",
"^197.192.45.*",
"^197.196.200.*",
"^197.223.249.*",
"^197.223.50.*",
"^197.246.183.*",
"^197.246.202.*",
"^197.32.0.*",
"^197.32.116.*",
"^197.32.129.*",
"^197.32.131.*",
"^197.32.158.*",
"^197.32.159.*",
"^197.32.187.*",
"^197.32.233.*",
"^197.32.52.*",
"^197.33.241.*",
"^197.34.158.*",
"^197.35.105.*",
"^197.36.127.*",
"^197.36.156.*",
"^197.36.214.*",
"^197.36.219.*",
"^197.36.221.*",
"^197.36.252.*",
"^197.36.63.*",
"^197.36.7.*",
"^197.36.74.*",
"^197.38.229.*",
"^197.38.244.*",
"^197.38.31.*",
"^197.39.135.*",
"^197.39.179.*",
"^197.39.180.*",
"^197.39.93.*",
"^197.40.143.*",
"^197.40.189.*",
"^197.40.250.*",
"^197.41.153.*",
"^197.41.162.*",
"^197.41.171.*",
"^197.41.207.*",
"^197.42.1.*",
"^197.42.155.*",
"^197.43.102.*",
"^197.43.203.*",
"^197.43.206.*",
"^197.43.67.*",
"^197.46.168.*",
"^197.46.190.*",
"^197.46.86.*",
"^197.47.1.*",
"^197.47.142.*",
"^197.47.23.*",
"^197.47.69.*",
"^197.48.235.*",
"^197.52.147.*",
"^197.52.157.*",
"^197.52.158.*",
"^197.52.182.*",
"^197.53.255.*",
"^197.54.102.*",
"^197.54.64.*",
"^197.55.174.*",
"^197.55.25.*",
"^197.55.60.*",
"^197.55.81.*",
"^197.55.87.*",
"^197.56.156.*",
"^197.56.181.*",
"^197.56.29.*",
"^197.56.35.*",
"^197.56.70.*",
"^197.57.102.*",
"^197.57.195.*",
"^197.57.200.*",
"^197.57.244.*",
"^197.58.232.*",
"^197.59.112.*",
"^197.59.243.*",
"^197.59.47.*",
"^197.60.104.*",
"^197.60.179.*",
"^197.60.236.*",
"^197.60.73.*",
"^197.61.177.*",
"^197.62.154.*",
"^197.62.175.*",
"^197.62.247.*",
"^197.63.134.*",
"^197.63.20.*",
"^197.63.249.*",
"^217.54.139.*",
"^217.54.191.*",
"^217.54.36.*",
"^217.55.160.*",
"^217.55.204.*",
"^31.13.127.*",
"^41.130.245.*",
"^41.176.108.*",
"^41.232.185.*",
"^41.232.3.*",
"^41.233.178.*",
"^41.233.239.*",
"^41.233.40.*",
"^41.233.50.*",
"^41.233.85.*",
"^41.233.9.*",
"^41.234.165.*",
"^41.234.225.*",
"^41.235.10.*",
"^41.235.151.*",
"^41.235.176.*",
"^41.235.229.*",
"^41.236.142.*",
"^41.236.45.*",
"^41.236.59.*",
"^41.236.9.*",
"^41.237.55.*",
"^41.237.66.*",
"^41.237.76.*",
"^41.238.0.*",
"^41.238.105.*",
"^41.238.174.*",
"^41.238.20.*",
"^41.239.131.*",
"^41.34.101.*",
"^41.34.83.*",
"^41.35.252.*",
"^41.35.28.*",
"^41.36.137.*",
"^41.37.127.*",
"^41.37.251.*",
"^41.37.98.*",
"^41.40.19.*",
"^41.40.213.*",
"^41.40.246.*",
"^41.42.111.*",
"^41.42.123.*",
"^41.42.20.*",
"^41.42.56.*",
"^41.42.68.*",
"^41.43.150.*",
"^41.43.22.*",
"^41.43.222.*",
"^41.44.149.*",
"^41.44.248.*",
"^41.45.136.*",
"^41.45.152.*",
"^41.45.195.*",
"^41.45.217.*",
"^41.45.84.*",
"^41.46.132.*",
"^41.46.218.*",
"^41.47.177.*",
"^41.47.237.*",
"^41.47.65.*",
"^41.64.173.*",
"^41.65.103.*",
"^41.65.160.*",
"^41.68.18.*",
"^41.68.197.*",
"^41.68.212.*",
"^41.68.253.*",
"^41.69.178.*",
"^41.69.220.*",
"^41.69.254.*",
"^41.69.38.*",
"^45.106.119.*",
"^45.110.210.*",
"^45.111.160.*",
"^45.240.131.*",
"^45.242.102.*",
"^45.242.86.*",
"^45.243.142.*",
"^45.243.172.*",
"^45.243.202.*",
"^45.246.63.*",
"^45.247.78.*",
"^46.32.125.*",
"^62.114.164.*",
"^62.139.193.*",
"^62.139.78.*",
"^84.36.228.*",
"68.65.53.71",
"^1.160.211.*",
"^100.0.14.*",
"^100.1.174.*",
"^100.15.53.*",
"^101.4.60.*",
"^103.125.217.*",
"^103.194.170.*",
"^103.196.180.*",
"^103.25.57.*",
"^103.59.156.*",
"^103.61.124.*",
"^103.62.235.*",
"^104.11.130.*",
"^104.128.226.*",
"^104.129.41.*",
"^104.14.149.*",
"^104.143.84.*",
"^104.156.229.*",
"^104.160.35.*",
"^104.164.45.*",
"^104.168.101.*",
"^104.168.117.*",
"^104.168.170.*",
"^104.168.90.*",
"^104.168.99.*",
"^104.172.175.*",
"^104.172.85.*",
"^104.182.213.*",
"^104.184.64.*",
"^104.187.103.*",
"^104.190.224.*",
"^104.192.74.*",
"^104.207.132.*",
"^104.215.89.*",
"^104.219.54.*",
"^104.219.81.*",
"^104.220.185.*",
"^104.222.147.*",
"^104.223.109.*",
"^104.223.93.*",
"^104.224.65.*",
"^104.228.8.*",
"^104.237.1.*",
"^104.237.131.*",
"^104.237.174.*",
"^104.238.146.*",
"^104.238.59.*",
"^104.243.195.*",
"^104.244.158.*",
"^104.244.73.*",
"^104.244.78.*",
"^104.245.35.*",
"^104.247.134.*",
"^104.35.153.*",
"^104.35.212.*",
"^104.42.198.*",
"^104.8.65.*",
"^107.11.76.*",
"^107.132.229.*",
"^107.143.102.*",
"^107.155.49.*",
"^107.161.169.*",
"^107.161.17.*",
"^107.163.234.*",
"^107.170.*.*",
"^107.175.94.*",
"^107.178.200.*",
"^107.178.232.*",
"^107.178.236.*",
"^107.178.238.*",
"^107.178.239.*",
"^107.181.156.*",
"^107.182.239.*",
"^107.185.239.*",
"^107.186.233.*",
"^107.191.102.*",
"^107.191.103.*",
"^107.191.105.*",
"^107.191.125.*",
"^107.191.96.*",
"^107.192.123.*",
"^107.242.113.*",
"^107.242.117.*",
"^107.72.164.*",
"^107.77.165.*",
"^107.77.173.*",
"^107.77.193.*",
"^107.77.195.*",
"^107.77.196.*",
"^107.77.197.*",
"^107.77.199.*",
"^107.77.200.*",
"^107.77.207.*",
"^107.77.208.*",
"^107.77.209.*",
"^107.77.210.*",
"^107.77.211.*",
"^107.77.213.*",
"^107.77.215.*",
"^107.77.216.*",
"^107.77.219.*",
"^107.77.223.*",
"^107.77.225.*",
"^107.77.226.*",
"^107.77.227.*",
"^107.77.229.*",
"^107.77.230.*",
"^107.77.231.*",
"^107.77.232.*",
"^107.77.235.*",
"^107.77.241.*",
"^107.77.249.*",
"^107.77.66.*",
"^107.77.70.*",
"^107.77.76.*",
"^107.9.57.*",
"^108.12.40.*",
"^108.188.189.*",
"^108.20.33.*",
"^108.202.121.*",
"^108.216.127.*",
"^108.223.216.*",
"^108.235.237.*",
"^108.35.237.*",
"^108.41.43.*",
"^108.48.78.*",
"^108.62.49.*",
"^108.66.142.*",
"^108.68.124.*",
"^108.69.56.*",
"^108.81.187.*",
"^108.81.99.*",
"^108.87.127.*",
"^109.145.184.*",
"^109.169.33.*",
"^109.186.*.*",
"^110.54.186.*",
"^114.124.207.*",
"^114.143.206.*",
"^115.112.129.*",
"^115.89.74.*",
"^118.127.15.*",
"^118.175.93.*",
"^118.219.252.*",
"^118.69.249.*",
"^119.15.80.*",
"^119.252.27.*",
"^12.148.196.*",
"^12.148.209.*",
"^12.153.197.*",
"^12.190.236.*",
"^12.196.66.*",
"^12.219.131.*",
"^12.47.205.*",
"^121.200.6.*",
"^122.161.105.*",
"^122.161.143.*", 
"^125.18.48.*",
"^128.14.136.*",
"^128.242.*.*",
"^128.90.147.*",
"^129.78.110.*",
"^13.88.22.*",
"^13.92.127.*",
"^130.149.80.*",
"^131.212.*.*",
"^134.209.201.*",
"^134.209.33.*",
"^137.152.185.*",
"^137.226.113.*",
"^138.246.253.*",
"^138.32.80.*",
"^138.68.254.*",
"^138.68.29.*",
"^138.68.43.*",
"^138.91.253.*",
"^139.162.138.*",
"^139.59.4.*",
"^142.165.58.*",
"^142.234.203.*",
"^142.68.48.*",
"^142.93.74.*",
"^144.172.68.*",
"^144.202.86.*",
"^144.217.80.*",
"^144.76.109.*",
"^148.251.151.*",
"^148.251.151.*", 
"^148.251.52.*",
"^148.64.56.*",
"^148.74.197.*",
"^148.75.53.*",
"^149.20.*.*",
"^149.71.202.*",
"^149.71.204.*",
"^149.71.205.*",
"^149.71.207.*",
"^149.71.240.*",
"^149.71.242.*",
"^149.71.250.*",
"^149.71.252.*",
"^149.71.255.*",
"^151.236.22.*",
"^154.127.57.*",
"^154.184.134.*",
"^154.49.205.*",
"^154.49.206.*",
"^154.50.138.*",
"^155.254.115.*",
"^155.64.38.*",
"^155.94.66.*",
"^156.218.117.*",
"^156.218.15.*",
"^156.218.253.*",
"^156.218.61.*",
"^156.218.97.*",
"^156.219.122.*",
"^156.219.191.*",
"^156.219.249.*",
"^156.219.65.*",
"^156.221.204.*",
"^156.221.34.*",
"^156.39.127.*",
"^157.230.173.*",
"^157.230.177.*",
"^157.255.17.*", 
"^157.55.169.*",
"^157.56.160.*",
"^157.56.160.*", 
"^158.108.*.*",
"^158.121.180.*",
"^158.174.122.*",
"^158.177.165.*",
"^158.222.125.*",
"^158.69.27.*",
"^158.85.9.*",
"^159.122.169.*",
"^159.122.192.*",
"^159.65.170.*",
"^159.69.74.*",
"^159.69.74.*", 
"^159.8.84.*",
"^159.83.115.*",
"^159.89.146.*",
"^160.202.162.*",
"^161.202.152.*",
"^161.69.99.*",
"^162.195.137.*",
"^162.206.47.*",
"^162.211.64.*",
"^162.211.66.*",
"^162.211.67.*",
"^162.219.31.*",
"^162.223.95.*",
"^162.226.87.*",
"^162.228.230.*",
"^162.243.128.*",
"^162.245.50.*",
"^162.253.176.*",
"^162.253.177.*",
"^162.253.178.*",
"^164.132.51.*",
"^165.117.232.*",
"^165.22.142.*",
"^165.227.0.*",
"^165.227.113.*",
"^165.227.123.*",
"^165.227.163.*",
"^166.137.136.*",
"^166.137.252.*",
"^166.170.0.*",
"^166.170.15.*",
"^166.216.159.*",
"^166.70.207.*",
"^167.160.116.*",
"^167.24.*.*",
"^167.88.124.*",
"^168.1.122.*",
"^168.1.54.*",
"^168.1.89.*",
"^168.188.*.*",
"^168.235.65.*",
"^168.235.67.*",
"^168.235.86.*",
"^168.235.91.*",
"^169.197.112.*",
"^169.239.155.*",
"^169.38.68.*",
"^169.38.74.*",
"^169.51.83.*",
"^169.53.225.*",
"^169.56.76.*",
"^169.57.153.*",
"^169.57.17.*",
"^169.57.65.*",
"^17.225.16.*",
"^17.225.17.*",
"^170.249.129.*",
"^171.13.14.*",
"^171.50.133.*", 
"^171.50.136.*",
"^171.78.247.*",
"^172.10.117.*",
"^172.101.110.*",
"^172.110.128.*",
"^172.115.62.*",
"^172.117.193.*",
"^172.13.200.*",
"^172.221.57.*",
"^172.241.115.*",
"^172.245.217.*",
"^172.251.142.*",
"^172.255.93.*",
"^172.56.10.*",
"^172.56.11.*",
"^172.56.21.*",
"^172.56.35.*",
"^172.56.5.*",
"^172.56.6.*",
"^172.58.107.*",
"^172.58.109.*",
"^172.58.12.*",
"^172.58.139.*",
"^172.58.14.*",
"^172.58.140.*",
"^172.58.142.*",
"^172.58.143.*",
"^172.58.15.*",
"^172.58.158.*",
"^172.58.217.*",
"^172.58.22.*",
"^172.58.221.*",
"^172.58.223.*",
"^172.58.224.*",
"^172.58.23.*",
"^172.58.27.*",
"^172.58.29.*",
"^172.58.32.*",
"^172.58.68.*",
"^172.58.7.*",
"^172.58.92.*",
"^172.58.96.*",
"^172.74.166.*",
"^172.82.128.*",
"^172.82.145.*",
"^172.88.39.*",
"^172.93.52.*",
"^173.12.230.*",
"^173.17.18.*",
"^173.171.141.*",
"^173.174.58.*",
"^173.194.*.*",
"^173.205.33.*",
"^173.218.74.*",
"^173.219.95.*",
"^173.239.199.*",
"^173.244.37.*",
"^173.245.217.*",
"^173.247.129.*",
"^173.247.238.*",
"^173.248.145.*",
"^173.248.186.*",
"^173.252.127.*",
"^173.252.95.*",
"^173.44.42.*",
"^173.56.239.*",
"^173.68.146.*",
"^173.68.249.*",
"^173.80.61.*",
"^173.81.34.*",
"^173.84.13.*",
"^173.88.102.*",
"^173.91.40.*",
"^174.101.125.*",
"^174.101.128.*",
"^174.111.252.*",
"^174.131.222.*",
"^174.17.237.*",
"^174.192.7.*",
"^174.194.23.*",
"^174.194.35.*",
"^174.194.6.*",
"^174.195.149.*",
"^174.195.198.*",
"^174.195.3.*",
"^174.196.10.*",
"^174.196.147.*",
"^174.197.1.*",
"^174.197.18.*",
"^174.197.3.*",
"^174.201.26.*",
"^174.203.12.*",
"^174.203.30.*",
"^174.204.27.*",
"^174.206.10.*",
"^174.206.40.*",
"^174.207.36.*",
"^174.208.36.*",
"^174.211.18.*",
"^174.212.26.*",
"^174.212.9.*",
"^174.213.21.*",
"^174.216.47.*",
"^174.217.14.*",
"^174.217.20.*",
"^174.217.7.*",
"^174.218.9.*",
"^174.219.131.*",
"^174.220.7.*",
"^174.222.141.*",
"^174.222.142.*",
"^174.222.144.*",
"^174.222.158.*",
"^174.223.136.*",
"^174.223.143.*",
"^174.224.130.*",
"^174.225.129.*",
"^174.225.4.*",
"^174.227.139.*",
"^174.228.8.*",
"^174.230.15.*",
"^174.230.21.*",
"^174.230.4.*",
"^174.230.6.*",
"^174.230.9.*",
"^174.231.1.*",
"^174.232.0.*",
"^174.233.3.*",
"^174.234.131.*",
"^174.234.134.*",
"^174.235.0.*",
"^174.235.139.*",
"^174.236.14.*",
"^174.236.9.*",
"^174.238.141.*",
"^174.254.64.*",
"^174.254.67.*",
"^174.255.78.*",
"^174.50.70.*",
"^174.65.133.*",
"^174.66.134.*",
"^174.79.6.*",
"^174.85.25.*",
"^174.96.7.*",
"^174.97.112.*",
"^174.97.48.*",
"^174.99.119.*",
"^176.10.107.*",
"^176.10.99.*",
"^176.25.83.*",
"^177.154.139.*",
"^178.128.170.*",
"^178.159.0.*",
"^178.17.166.*",
"^178.17.171.*",
"^178.17.174.*",
"^178.171.19.*",
"^178.175.132.*",
"^178.32.147.*",
"^178.32.59.*",
"^178.62.74.*",
"^179.43.134.*",
"^18.228.238.*",
"^18.228.24.*",
"^18.236.139.*",
"^18.236.174.*",
"^18.237.117.*",
"^18.237.6.*",
"^18.27.197.*",
"^18.85.192.*",
"^180.163.220.*",
"^180.179.142.*",
"^181.119.128.*",
"^181.177.80.*",
"^181.214.182.*",
"^181.214.189.*",
"^181.214.191.*",
"^181.214.2.*",
"^181.214.3.*",
"^182.64.105.*",
"^182.64.82.*",
"^182.77.24.*",
"^182.77.24.*", 
"^184.100.235.*",
"^184.103.16.*",
"^184.152.184.*",
"^184.153.130.*",
"^184.153.22.*",
"^184.155.243.*",
"^184.17.233.*",
"^184.173.*.*",
"^184.173.25.*",
"^184.173.92.*",
"^184.174.118.*",
"^184.174.28.*",
"^184.20.240.*",
"^184.68.146.*",
"^184.89.191.*",
"^184.89.53.*",
"^184.90.71.*",
"^185.100.85.*",
"^185.100.86.*",
"^185.100.87.*",
"^185.101.32.*",
"^185.104.120.*",
"^185.104.184.*",
"^185.104.186.*",
"^185.108.128.*",
"^185.117.215.*",
"^185.124.224.*",
"^185.129.62.*",
"^185.144.156.*",
"^185.147.237.*",
"^185.155.32.*",
"^185.16.85.*",
"^185.162.229.*",
"^185.165.229.*",
"^185.165.84.*",
"^185.169.255.*",
"^185.169.42.*",
"^185.17.107.*",
"^185.170.197.*",
"^185.172.53.*",
"^185.174.253.*",
"^185.175.208.*",
"^185.175.59.*",
"^185.187.30.*",
"^185.189.113.*",
"^185.197.28.*",
"^185.198.25.*",
"^185.198.26.*",
"^185.2.196.*",
"^185.20.6.*",
"^185.206.225.*",
"^185.208.236.*",
"^185.209.253.*",
"^185.210.217.*",
"^185.211.147.*",
"^185.215.227.*",
"^185.216.33.*",
"^185.217.149.*",
"^185.220.101.*",
"^185.220.70.*",
"^185.220.70.*", 
"^185.228.231.*",
"^185.232.22.*",
"^185.242.4.*",
"^185.248.160.*",
"^185.253.121.*",
"^185.255.112.*",
"^185.43.110.*",
"^185.47.44.*",
"^185.61.138.*",
"^185.65.205.*",
"^185.72.156.*",
"^185.76.9.*",
"^185.93.180.*",
"^185.93.2.*",
"^185.93.54.*",
"^186.226.128.*",
"^188.166.63.*",
"^190.21.127.*",
"^191.101.200.*",
"^191.101.63.*",
"^191.243.199.*",
"^191.96.191.*",
"^191.96.81.*",
"^191.96.82.*",
"^191.96.83.*",
"^192.103.252.*",
"^192.115.134.*",
"^192.118.48.*",
"^192.154.215.*",
"^192.154.242.*",
"^192.154.246.*",
"^192.160.102.*",
"^192.171.244.*",
"^192.171.250.*",
"^192.186.135.*",
"^192.210.139.*",
"^192.210.204.*",
"^192.210.213.*",
"^192.210.218.*",
"^192.227.186.*",
"^192.227.233.*",
"^192.227.251.*",
"^192.252.223.*",
"^192.3.110.*",
"^192.3.18.*",
"^192.3.182.*",
"^192.36.123.*",
"^192.36.66.*",
"^192.36.89.*",
"^192.40.95.*",
"^192.68.11.*",
"^192.99.169.*",
"^193.128.111.*",
"^193.128.114.*",
"^193.181.25.*",
"^193.181.27.*",
"^193.187.113.*",
"^193.220.178.*",
"^193.226.177.*",
"^193.253.199.*",
"^193.30.34.*",
"^193.30.35.*",
"^193.47.80.*",
"^193.56.29.*",
"^193.90.12.*",
"^194.154.78.*",
"^194.156.124.*",
"^194.156.137.*",
"^194.187.249.*",
"^194.31.151.*",
"^194.52.68.*",
"^194.59.251.*",
"^194.71.109.*",
"^194.72.238.*",
"^194.90.*.*",
"^194.99.105.*",
"^194.99.106.*",
"^195.110.40.*",
"^195.123.224.*",
"^195.154.179.*",
"^195.176.3.*",
"^195.181.165.*",
"^195.181.172.*",
"^195.181.174.*",
"^195.206.105.*",
"^195.211.23.*",
"^195.68.142.*",
"^195.74.76.*",
"^195.9.188.*",
"^196.152.196.*",
"^196.159.165.*",
"^196.251.250.*",
"^196.251.88.*",
"^196.52.34.*",
"^196.52.84.*",
"^196.55.2.*",
"^196.55.2.*",  
"^197.246.207.*",
"^197.41.182.*",
"^197.54.169.*",
"^197.61.85.*",
"^197.61.90.*",
"^198.12.127.*",
"^198.12.28.*",
"^198.12.67.*",
"^198.134.126.*",
"^198.148.15.*",
"^198.186.192.*",
"^198.199.92.*",
"^198.217.25.*",
"^198.23.150.*",
"^198.23.158.*",
"^198.23.230.*",
"^198.25.*.*",
"^198.37.121.*",
"^198.37.96.*",
"^198.37.99.*",
"^198.46.148.*",
"^198.46.152.*",
"^198.46.156.*",
"^198.46.163.*",
"^198.46.179.*",
"^198.46.230.*",
"^198.46.251.*",
"^198.54.*.*",
"^198.54.93.*", 
"^198.59.178.*",
"^198.72.159.*",
"^198.8.93.*",
"^198.96.155.*",
"^199.116.169.*",
"^199.116.173.*",
"^199.119.235.*",
"^199.167.29.*",
"^199.195.109.*",
"^199.21.112.*",
"^199.244.88.*",
"^199.249.230.*",
"^199.30.228.*",
"^199.30.228.*",
"^199.38.242.*",
"^199.66.201.*",
"^199.73.106.*",
"^2.137.96.*",
"^2.78.44.*",
"^200.0.23.*",
"^200.189.44.*",
"^200.50.248.*",
"^200.80.48.*",
"^200.98.137.*",
"^200.98.146.*",
"^201.229.40.*",
"^201.244.224.*",
"^202.108.252.*",
"^202.168.153.*",
"^202.168.153.*", 
"^202.191.123.*",
"^204.101.161.*",
"^204.13.201.*",
"^204.14.48.*",
"^204.210.202.*",
"^204.27.60.*",
"^204.44.89.*",
"^205.153.155.*",
"^205.174.34.*",
"^205.185.127.*",
"^205.185.214.*",
"^205.251.148.*",
"^206.104.212.*",
"^206.124.104.*",
"^206.166.236.*",
"^206.206.103.*",
"^206.206.105.*",
"^206.206.106.*",
"^206.206.108.*",
"^206.206.109.*",
"^206.28.72.*",
"^207.102.138.*",
"^207.126.144.*",
"^207.141.37.*",
"^207.154.240.*",
"^207.189.30.*",
"^207.244.103.*",
"^207.244.104.*",
"^208.104.35.*",
"^208.114.116.*",
"^208.117.252.*",
"^208.117.252.*", 
"^208.65.144.*",
"^208.80.194.*",
"^208.87.233.*",
"^208.91.115.*",
"^209.107.196.*",
"^209.135.132.*",
"^209.141.41.*",
"^209.141.43.*",
"^209.141.58.*",
"^209.141.60.*",
"^209.150.248.*",
"^209.164.184.*",
"^209.17.96.*",
"^209.17.97.*",
"^209.19.152.*",
"^209.192.135.*",
"^209.208.108.*",
"^209.208.110.*",
"^209.242.196.*",
"^209.73.228.*",
"^209.85.*.*",
"^209.85.128.*",
"^209.95.51.*",
"^209.99.129.*",
"^209.99.143.*",
"^209.99.144.*",
"^210.245.14.*",
"^210.52.224.*",
"^211.55.19.*",
"^212.115.224.*",
"^212.119.227.*",
"^212.143.*.*",
"^212.143.94.*",
"^212.150.*.*",
"^212.179.17.*",
"^212.235.*.*",
"^212.29.192.*",
"^212.29.224.*",
"^212.50.193.*",
"^212.62.211.*",
"^212.83.151.*", 
"^212.83.158.*",
"^212.83.169.*",
"^212.83.181.*",
"^212.92.105.*",
"^213.159.213.*",
"^213.160.32.*",
"^213.184.92.*",
"^213.211.236.*",
"^213.211.242.*",
"^213.219.39.*",
"^216.108.233.*",
"^216.126.224.*",
"^216.126.225.*",
"^216.126.228.*",
"^216.126.231.*",
"^216.158.196.*",
"^216.163.176.*",
"^216.21.9.*",
"^216.239.32.*",
"^216.246.212.*",
"^216.252.167.*",
"^216.99.127.*",
"^217.132.*.*",
"^217.55.151.*",
"^217.64.113.*",
"^218.5.21.*",
"^221.229.218.*",
"^23.105.129.*",
"^23.105.70.*",
"^23.108.67.*",
"^23.108.72.*",
"^23.112.125.*",
"^23.118.210.*",
"^23.129.64.*",
"^23.226.209.*",
"^23.226.237.*",
"^23.229.64.*",
"^23.239.178.*",
"^23.239.180.*",
"^23.239.183.*",
"^23.239.2.*",
"^23.239.84.*",
"^23.240.158.*",
"^23.240.163.*",
"^23.249.228.*",
"^23.254.204.*",
"^23.27.145.*",
"^23.27.146.*",
"^23.27.236.*",
"^23.27.237.*",
"^23.28.60.*",
"^23.80.138.*",
"^23.92.127.*",
"^23.92.53.*",
"^23.92.89.*",
"^23.94.187.*",
"^23.94.55.*",
"^23.95.226.*",
"^23.95.89.*",
"^24.10.21.*",
"^24.12.158.*",
"^24.137.110.*",
"^24.160.173.*",
"^24.161.22.*",
"^24.168.86.*",
"^24.175.217.*",
"^24.181.232.*",
"^24.185.215.*",
"^24.196.184.*",
"^24.197.130.*",
"^24.20.1.*",
"^24.208.185.*",
"^24.209.10.*",
"^24.211.96.*",
"^24.216.104.*",
"^24.226.169.*",
"^24.228.109.*",
"^24.229.242.*",
"^24.23.43.*",
"^24.242.229.*",
"^24.246.226.*",
"^24.251.84.*",
"^24.252.111.*",
"^24.252.120.*",
"^24.255.243.*",
"^24.56.20.*",
"^24.74.95.*",
"^24.75.167.*",
"^27.115.124.*",
"^27.151.73.*",
"^27.34.104.*",
"^27.56.180.*",
"^3.81.172.*",
"^3.91.61.*",
"^3.94.163.*",
"^31.13.115.*",
"^31.13.127.*",
"^31.13.127.*", 
"^31.13.188.*",
"^31.13.191.*",
"^31.220.30.*",
"^34.208.39.*",
"^34.209.175.*",
"^34.209.182.*",
"^34.210.196.*",
"^34.210.84.*",
"^34.211.230.*",
"^34.211.26.*",
"^34.215.108.*",
"^34.217.115.*",
"^34.217.61.*",
"^34.218.45.*",
"^34.224.55.*",
"^34.230.78.*",
"^34.231.157.*",
"^34.235.48.*",
"^34.238.166.*",
"^35.137.112.*",
"^35.137.157.*",
"^35.161.69.*",
"^35.162.14.*",
"^35.166.2.*",
"^35.166.85.*",
"^35.167.238.*",
"^35.193.177.*",
"^35.199.165.*",
"^35.203.245.*",
"^35.204.210.*",
"^35.230.49.*",
"^36.226.229.*",
"^36.67.96.*",
"^36.99.136.*",
"^37.187.129.*",
"^37.220.36.*",
"^38.100.*.*",
"^38.105.*.*",
"^38.106.120.*",
"^38.111.164.*",
"^38.122.245.*",
"^38.127.124.*",
"^38.127.127.*",
"^38.128.108.*",
"^38.129.103.*",
"^38.130.161.*",
"^38.130.176.*",
"^38.130.178.*",
"^38.130.180.*",
"^38.132.97.*",
"^38.133.120.*",
"^38.144.36.*",
"^38.145.86.*",
"^38.145.87.*",
"^38.145.98.*",
"^38.64.101.*",
"^38.64.102.*",
"^38.64.55.*",
"^38.66.249.*",
"^38.83.11.*",
"^38.83.9.*",
"^38.86.228.*",
"^38.86.229.*",
"^38.90.148.*",
"^38.95.218.*",
"^38.97.133.*",
"^40.137.34.*",
"^40.76.35.*",
"^40.91.74.*",
"^40.91.75.*",
"^40.91.78.*",
"^40.91.79.*",
"^41.42.200.*",
"^42.236.10.*",
"^45.123.117.*",
"^45.154.255.*",
"^45.199.184.*",
"^45.32.201.*",
"^45.32.222.*",
"^45.32.230.*",
"^45.33.20.*",
"^45.36.22.*",
"^45.40.126.*",
"^45.5.65.*",
"^45.5.66.*",
"^45.51.150.*",
"^45.56.146.*",
"^45.58.32.*",
"^45.58.45.*",
"^45.58.49.*",
"^45.58.55.*",
"^45.59.119.*",
"^45.59.126.*",
"^45.61.105.*",
"^45.61.111.*",
"^45.63.15.*",
"^45.63.68.*",
"^45.66.32.*",
"^45.74.154.*",
"^45.79.168.*",
"^45.79.213.*",
"^45.79.76.*",
"^46.101.94.*",
"^46.105.35.*",
"^46.105.54.*",
"^46.116.*.* ",
"^46.165.245.*",
"^46.195.25.*",
"^46.244.29.*",
"^46.248.190.*",
"^46.4.33.*",
"^46.4.33.*", 
"^47.12.24.*",
"^47.135.116.*",
"^47.138.216.*",
"^47.138.247.*",
"^47.157.247.*",
"^47.16.239.*",
"^47.189.194.*",
"^47.189.32.*",
"^47.189.49.*",
"^47.198.235.*",
"^47.211.86.*",
"^47.216.227.*",
"^47.221.148.*",
"^47.32.93.*",
"^47.36.166.*",
"^47.36.181.*",
"^47.41.242.*",
"^49.204.213.*",
"^49.204.215.*",
"^49.44.76.*",
"^49.44.83.*",
"^49.44.87.*",
"^5.10.101.*",
"^5.101.143.*",
"^5.157.24.*",
"^5.188.62.*",
"^5.199.135.*",
"^5.226.169.*",
"^5.252.249.*",
"^5.253.87.*",
"^5.39.89.*",
"^5.45.72.*",
"^5.62.41.*",
"^5.62.41.*", 
"^5.62.51.*",
"^50.116.58.*",
"^50.17.104.*",
"^50.205.89.*",
"^50.22.186.*",
"^50.5.172.*",
"^50.58.192.*",
"^50.7.*.*",
"^50.73.82.*",
"^50.79.25.*",
"^50.86.49.*",
"^50.88.166.*",
"^50.90.42.*",
"^50.97.*.*",
"^51.15.117.*",
"^51.15.191.*",
"^51.15.235.*",
"^51.15.68.*",
"^51.15.80.*",
"^51.255.45.*",
"^51.38.64.*",
"^51.68.174.*",
"^51.68.214.*",
"^51.77.167.*",
"^51.77.233.*",
"^51.89.138.*",
"^52.12.196.*",
"^52.183.83.*",
"^52.201.235.*",
"^52.204.27.*",
"^52.38.47.*",
"^52.40.159.*",
"^52.41.100.*",
"^52.44.111.*",
"^52.44.93.*",
"^52.52.48.*",
"^52.59.102.*",
"^54.149.103.*",
"^54.152.125.*",
"^54.153.95.*",
"^54.156.251.*",
"^54.176.*.*",
"^54.187.94.*",
"^54.190.129.*",
"^54.191.0.*",
"^54.198.55.*",
"^54.207.53.*",
"^54.212.17.*",
"^54.218.64.*",
"^54.233.209.*",
"^54.234.61.*",
"^54.244.219.*",
"^54.245.136.*",
"^54.36.108.*",
"^54.37.16.*",
"^54.38.235.*",
"^54.39.100.*",
"^54.71.102.*",
"^54.82.204.*",
"^54.86.37.*",
"^61.238.25.*",
"^62.102.148.*",
"^62.109.8.*",
"^62.116.207.*",
"^62.189.162.*",
"^62.210.116.*",
"^62.4.14.*",
"^62.67.194.*",
"^62.90.*.*",
"^63.117.215.*",
"^63.143.205.*",
"^63.231.143.*", 
"^64.106.213.*",
"^64.113.116.*",
"^64.121.86.*", 
"^64.124.14.*",
"^64.140.140.*",
"^64.140.142.*",
"^64.147.145.*",
"^64.15.113.*",
"^64.18.*.*",
"^64.18.112.*",
"^64.20.29.*",
"^64.207.235.*",
"^64.215.115.*",
"^64.233.160.*",
"^64.233.172.*",
"^64.233.172.*", 
"^64.246.166.*",
"^64.246.187.*",
"^64.246.187.*", 
"^64.27.2.*",
"^64.37.103.*",
"^64.62.136.*",
"^64.62.175.*",
"^64.64.100.*",
"^64.74.215.*",
"^64.90.146.*",
"^65.120.39.*",
"^65.154.226.*",
"^65.155.30.*",
"^65.156.50.*",
"^65.175.241.*",
"^65.181.113.*",
"^65.181.124.*",
"^65.181.127.*",
"^65.19.167.*",
"^65.191.194.*",
"^65.202.136.*",
"^65.26.199.*",
"^65.27.149.*",
"^65.43.34.*",
"^65.60.196.*",
"^65.74.233.*",
"^66.102.*.*",
"^66.102.7.*",
"^66.102.8.*",
"^66.102.8.*", 
"^66.108.105.*",
"^66.115.168.*",
"^66.129.102.*",
"^66.133.76.*",
"^66.135.200.*",
"^66.150.14.*",
"^66.153.146.*",
"^66.159.33.*",
"^66.187.76.*",
"^66.196.226.*",
"^66.2.41.*",
"^66.205.64.*",
"^66.207.120.*",
"^66.212.65.*",
"^66.214.252.*",
"^66.221.*.*",
"^66.249.*.*",
"^66.56.65.*",
"^66.69.131.*",
"^66.69.202.*",
"^66.78.16.*",
"^66.78.17.*",
"^66.85.185.*",
"^66.85.186.*",
"^66.87.129.*",
"^66.87.142.*",
"^66.87.144.*",
"^66.87.186.*",
"^67.10.134.*",
"^67.137.36.*",
"^67.15.*.*",
"^67.171.25.*",
"^67.181.210.*",
"^67.184.92.*",
"^67.185.111.*",
"^67.186.186.*",
"^67.209.128.*",
"^67.236.8.*",
"^67.249.114.*",
"^67.249.147.*",
"^67.44.193.*",
"^67.45.33.*",
"^67.60.223.*",
"^67.8.14.*",
"^67.82.19.*",
"^67.82.23.*",
"^67.84.45.*",
"^67.85.184.*",
"^67.87.34.*",
"^68.0.237.*",
"^68.10.204.*",
"^68.103.200.*",
"^68.104.63.*",
"^68.105.208.*",
"^68.107.224.*",
"^68.109.160.*",
"^68.110.208.*",
"^68.118.51.*",
"^68.129.15.*",
"^68.134.99.*",
"^68.183.152.*",
"^68.185.223.*",
"^68.192.10.*",
"^68.193.127.*",
"^68.194.228.*",
"^68.195.101.*",
"^68.196.101.*",
"^68.200.150.*",
"^68.202.58.*",
"^68.225.214.*",
"^68.225.58.*",
"^68.226.116.*",
"^68.226.198.*",
"^68.227.189.*",
"^68.229.52.*",
"^68.231.222.*",
"^68.231.57.*",
"^68.233.46.*",
"^68.33.94.*",
"^68.34.72.*",
"^68.4.230.*",
"^68.42.150.*",
"^68.42.21.*",
"^68.47.153.*",
"^68.5.160.*",
"^68.52.251.*",
"^68.54.186.*",
"^68.54.249.*",
"^68.54.4.*",
"^68.63.66.*",
"^68.8.193.*",
"^68.9.22.*",
"^68.94.253.*",
"^68.96.96.*",
"^68.99.140.*",
"^68.99.253.*",
"^69.116.58.*",
"^69.118.153.*",
"^69.12.93.*",
"^69.120.235.*",
"^69.124.152.*",
"^69.124.248.*",
"^69.125.93.*",
"^69.127.70.*",
"^69.130.237.*",
"^69.131.1.*",
"^69.141.174.*",
"^69.164.111.*",
"^69.164.145.*",
"^69.171.251.*",
"^69.206.217.*",
"^69.221.208.*",
"^69.231.245.*",
"^69.25.58.*",
"^69.254.142.*",
"^69.28.85.*",
"^69.28.90.*",
"^69.28.91.*",
"^69.3.186.*",
"^69.50.232.*",
"^69.51.25.*",
"^69.58.178.*",
"^69.6.177.*",
"^69.61.12.*",
"^69.65.*.*",
"^69.87.218.*",
"^69.87.219.*",
"^70.116.167.*",
"^70.121.192.*",
"^70.122.8.*",
"^70.123.176.*",
"^70.125.254.*",
"^70.127.212.*",
"^70.131.187.*",
"^70.139.225.*",
"^70.162.58.*",
"^70.169.150.*",
"^70.175.122.*",
"^70.177.111.*",
"^70.186.195.*",
"^70.187.78.*",
"^70.189.143.*",
"^70.190.125.*",
"^70.20.58.*",
"^70.23.207.*",
"^70.32.0.*",
"^70.42.131.*",
"^70.63.116.*",
"^71.10.6.*",
"^71.115.222.*",
"^71.145.192.*",
"^71.205.137.*",
"^71.209.222.*",
"^71.214.75.*",
"^71.217.10.*",
"^71.218.255.*",
"^71.224.21.*",
"^71.225.253.*",
"^71.226.74.*",
"^71.235.146.*",
"^71.244.82.*",
"^71.66.117.*",
"^71.71.67.*",
"^71.77.246.*",
"^71.82.246.*",
"^71.95.10.*",
"^72.12.194.*",
"^72.14.192.*",
"^72.143.218.*",
"^72.143.239.*",
"^72.168.145.*",
"^72.168.177.*",
"^72.179.50.*",
"^72.181.92.*",
"^72.193.214.*",
"^72.197.181.*",
"^72.198.18.*",
"^72.204.12.*",
"^72.205.22.*",
"^72.205.232.*",
"^72.209.39.*",
"^72.240.222.*",
"^72.69.51.*",
"^72.73.203.*",
"^72.74.252.*",
"^72.92.239.*",
"^73.0.38.*",
"^73.109.60.*",
"^73.112.20.*",
"^73.124.138.*",
"^73.129.167.*",
"^73.131.52.*",
"^73.132.201.*",
"^73.135.125.*",
"^73.145.206.*",
"^73.149.204.*",
"^73.154.186.*",
"^73.179.213.*",
"^73.184.29.*",
"^73.197.81.*",
"^73.21.170.*",
"^73.21.79.*",
"^73.211.181.*",
"^73.212.179.*",
"^73.242.198.*",
"^73.251.85.*",
"^73.253.254.*",
"^73.28.189.*",
"^73.29.209.*",
"^73.42.98.*",
"^73.43.50.*",
"^73.44.124.*",
"^73.47.176.*",
"^73.47.72.*",
"^73.50.47.*",
"^73.55.129.*",
"^73.57.69.*",
"^73.67.164.*",
"^73.68.207.*",
"^73.75.253.*",
"^73.90.205.*",
"^73.98.95.*",
"^74.105.171.*",
"^74.113.118.*",
"^74.114.118.*",
"^74.125.*.*",
"^74.127.78.*",
"^74.132.151.*",
"^74.141.200.*",
"^74.215.212.*",
"^74.217.90.*",
"^74.5.2.*",
"^74.70.83.*",
"^74.79.71.*",
"^75.100.219.*",
"^75.110.154.*",
"^75.127.10.*",
"^75.134.236.*",
"^75.138.211.*",
"^75.14.254.*",
"^75.149.221.*",
"^75.167.8.*",
"^75.173.75.*",
"^75.190.73.*",
"^75.3.236.*",
"^75.52.191.*",
"^75.71.113.*",
"^75.73.52.*",
"^75.97.147.*",
"^76.108.209.*",
"^76.127.67.*",
"^76.167.72.*",
"^76.169.86.*",
"^76.17.31.*",
"^76.174.131.*",
"^76.175.175.*",
"^76.181.179.*",
"^76.183.206.*",
"^76.189.56.*",
"^76.191.79.*",
"^76.253.48.*",
"^76.30.242.*",
"^76.8.60.*",
"^76.86.37.*",
"^76.94.13.*",
"^77.139.208.*",
"^77.243.191.*",
"^77.247.181.*",
"^77.40.129.*",
"^77.67.54.*",
"^79.104.209.*",
"^79.124.7.*",
"^79.182.90.*",
"^79.73.64.*",
"^79.73.69.*",
"^79.73.71.*",
"^8.22.71.*",
"^80.230.231.*",
"^81.158.49.*",
"^81.161.59.*",
"^81.17.27.*",
"^81.171.110.*",
"^81.171.59.*",
"^81.174.160.*",
"^82.102.20.*",
"^82.102.22.*",
"^82.102.27.*",
"^82.166.*.*",
"^82.199.130.*",
"^82.211.58.*",
"^82.221.128.*",
"^82.221.131.*",
"^82.223.14.*",
"^82.28.60.*",
"^82.80.230.*",
"^83.31.129.*",
"^83.31.184.*",
"^83.31.242.*",
"^83.31.56.*",
"^84.10.132.*",
"^84.13.190.*",
"^84.17.48.*",
"^84.17.51.*",
"^84.51.186.*",
"^84.93.104.*",
"^84.93.162.*",
"^84.93.39.*",
"^85.115.52.*",
"^85.17.14.*",
"^85.203.15.*",
"^85.203.48.*",
"^85.203.49.*",
"^85.203.51.*",
"^85.206.166.*",
"^85.248.227.*",
"^85.250.*.*",
"^85.64.*.*",
"^86.8.251.*",
"^87.101.93.*",
"^87.101.94.*",
"^87.112.15.*",
"^87.112.183.*",
"^87.112.245.*",
"^87.113.67.*",
"^87.114.200.*",
"^87.114.65.*",
"^87.118.92.*",
"^87.120.254.*",
"^87.239.255.*",
"^87.89.48.*",
"^88.12.42.*",
"^89.108.99.*",
"^89.108.99.*", 
"^89.138.*.*",
"^89.208.29.*",
"^89.22.101.*",
"^89.238.150.*",
"^89.238.154.*",
"^89.247.107.*",
"^89.249.73.*",
"^89.31.57.*",
"^89.46.125.*",
"^90.248.161.*",
"^91.103.66.*",
"^91.109.28.*",
"^91.188.125.*",
"^91.194.81.*",
"^91.201.143.*",
"^91.219.237.*",
"^91.239.206.*",
"^91.244.181.*",
"^92.23.56.*",
"^92.23.57.*",
"^92.23.61.*",
"^92.23.63.*",
"^92.62.139.*",
"^92.63.111.*",
"^93.115.7.*",
"^93.172.*.*",
"^93.186.202.*",
"^93.209.244.*",
"^93.63.162.*",
"^93.63.162.*", 
"^93.80.167.*",
"^94.102.52.*",
"^94.130.167.*",
"^94.14.222.*",
"^94.21.255.*",
"^94.230.208.*",
"^94.242.58.*",
"^95.142.161.*", 
"^95.211.77.*",
"^95.26.122.*",
"^95.26.57.*",
"^96.231.234.*",
"^96.252.66.*",
"^96.37.97.*",
"^96.47.52.*",
"^96.59.51.*",
"^96.8.120.*",
"^96.89.83.*",
"^96.95.88.*",
"^97.107.132.*",
"^97.68.237.*",
"^97.93.21.*",
"^98.121.76.*",
"^98.158.179.*",
"^98.165.68.*",
"^98.168.220.*",
"^98.168.226.*",
"^98.171.69.*",
"^98.179.235.*",
"^98.181.183.*",
"^98.184.181.*",
"^98.190.53.*",
"^98.191.180.*",
"^98.192.218.*",
"^98.195.47.*",
"^98.214.39.*",
"^98.215.178.*",
"^98.221.179.*",
"^98.24.232.*",
"^98.24.239.*",
"^98.240.172.*",
"^98.29.109.*",
"^98.31.54.*",
"^99.0.6.*",
"^99.10.172.*",
"^99.105.110.*",
"^99.129.82.*",
"^99.152.42.*",
"^99.177.183.*",
"^99.182.18.*",
"^99.195.57.*",
"^99.198.30.*",
"^99.20.72.*",
"^99.203.0.*",
"^99.203.10.*",
"^99.203.106.*",
"^99.203.118.*",
"^99.203.20.*",
"^99.203.33.*",
"^99.203.41.*",
"^99.203.54.*",
"^99.203.68.*",
"^99.203.78.*",
"^99.203.84.*",
"^99.203.85.*",
"^99.203.91.*",
"^99.203.92.*",
"^99.203.93.*",
"^99.47.100.*",
"^99.49.253.*",
"^99.51.179.*",
"^99.67.150.*");
if(in_array($IP_Connected,$IP_Banned)){
    $errors = '<h1>404 Not Found</h1>The page that you have requested could not be found.<br>';
   // $errors .= gethostbyaddr($_SERVER['REMOTE_ADDR']).'<br>';
  // $errors .= php_uname();
    die($errors);
}
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$blocked_words = array("above","google","softlayer","amazonaws","cyveillance","phishtank","dreamhost","netpilot","calyxinstitute","tor-exit", "msnbot","p3pwgdsn","netcraft","trendmicro", "ebay", "netflix", "torservers", "messagelabs", "sucuri.net", "crawler",);
foreach($blocked_words as $word) {
    if (substr_count($hostname, $word) > 0) {
        header("HTTP/1.0 404 Not Found");
        die("<h1>404 Not Found</h1>The page that you have requested could not be found.");

    }
}
