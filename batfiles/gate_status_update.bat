@echo off
:main
mysql -u root -p putpasswordhere -h localhost tapper_db -e "UPDATE gate_personstatus SET campus_status = 0 WHERE campus_status = 1"
