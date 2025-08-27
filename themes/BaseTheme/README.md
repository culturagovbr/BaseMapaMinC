# BaseTheme

## O que é

O BaseTheme é uma camada intermediária entre o CORE do Mapas Culturais e os temas específicos. Ele centraliza funcionalidades que antes estavam no CORE, permitindo que múltiplos temas herdem essas funcionalidades sem duplicar código.

## Como funciona

### Estrutura de herança
```
BaseV2 (CORE)
    ↓
BaseTheme (funcionalidades comuns)
    ↓
Temas específicos (MapaMinC, Funarte, etc.)
```

### Por que usar
- **Evita duplicação**: Funcionalidades comuns ficam em um só lugar
- **Facilita manutenção**: Mudanças afetam todos os temas filhos
- **Mantém consistência**: Comportamento uniforme entre temas
- **Limpa o CORE**: Funcionalidades específicas saem do CORE principal

## Antes vs Depois

### Antes da reestruturação
- CORE com lógica específica misturada
- Cada tema implementava a mesma funcionalidade
- Manutenção difícil (mudanças em vários lugares)
- Comportamentos inconsistentes

### Depois da reestruturação
- CORE limpo (apenas funcionalidades principais)
- Funcionalidades comuns centralizadas no BaseTheme
- Manutenção fácil (mudanças em um lugar)
- Comportamento consistente entre temas

## Temas que usam

- **MapaMinC**: Herda funcionalidades + adiciona ícones específicos
- **Funarte**: Herda funcionalidades + adiciona analytics específicos
- **Futuros temas**: Automaticamente herdam funcionalidades comuns