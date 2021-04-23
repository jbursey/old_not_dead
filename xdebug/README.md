# Overview

These configs should be placed on your machine and inside the container image running the php code. The idea is that XDebug will connect from within the container over port 9003 to the "host" which is the docker IP your machine knows. This allows VSCode to use the config provided under host.conf to accept incoming debug info.
