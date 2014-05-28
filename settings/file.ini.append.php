<?php /*

[eZDFSClusteringSettings]
DFSBackend=eZDFSFileHandlerDFSDispatcher

[DispatchableDFS]
# The default backend, used when no path in PathBackends matches the file path
DefaultBackend=eZDFSFileHandlerDFSBackend

# Extra backends based on path.
# The key is the path prefix to match on, and the value the backend classname
#PathBackend[var/ezdemosite/storage/images]=MyDFSBackend
PathBackends[]
