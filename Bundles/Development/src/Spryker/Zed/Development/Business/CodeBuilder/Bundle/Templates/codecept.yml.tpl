namespace: {bundle}
actor: Tester
paths:
    tests: tests
    log: tests/_output
    data: tests/_data
    support: tests/_support
    envs: tests/_envs
settings:
    bootstrap: _bootstrap.php
    suite_class: \PHPUnit_Framework_TestSuite
    colors: true
    memory_limit: 1024M
    log: true
coverage:
    enabled: true
    whitelist: { include: ['src/*.php'] }
