# Abreviaciones en Tailwind CSS

## Espaciado
- **Margen**:
  - `m-{size}` : margen en todos los lados.
  - `mx-{size}`: margen horizontal.
  - `my-{size}`: margen vertical.
  - `mt-{size}`: margen superior.
  - `mr-{size}`: margen derecho.
  - `mb-{size}`: margen inferior.
  - `ml-{size}`: margen izquierdo.

- **Padding**:
  - `p-{size}` : padding en todos los lados.
  - `px-{size}`: padding horizontal.
  - `py-{size}`: padding vertical.
  - `pt-{size}`: padding superior.
  - `pr-{size}`: padding derecho.
  - `pb-{size}`: padding inferior.
  - `pl-{size}`: padding izquierdo.

## Tamaños
- **Width/Height**:
  - `w-{size}`    : ancho.
  - `h-{size}`    : altura.
  - `max-w-{size}`: ancho máximo.
  - `min-h-{size}`: altura mínima.
  - `w-screen`    : ancho completo de la pantalla.
  - `h-screen`    : altura completa de la pantalla.

## Colores
- **Fondo**:
  - `bg-{color}-{shade}`: color de fondo (ej. `bg-red-500`).
  
- **Texto**:
  - `text-{color}-{shade}`: color de texto.

- **Borde**:
  - `border-{color}-{shade}`: color del borde.

## Tipografía
- **Tamaño de Fuente**:
  - `text-{size}`: tamaño de fuente.
  
- **Peso de Fuente**:
  - `font-{weight}`: peso de fuente (ej. `font-bold`).

- **Altura de Línea**:
  - `leading-{size}`: altura de línea.

- **Familia de Fuente**:
  - `font-sans`, `font-serif`, `font-mono`.

## Efectos
- **Sombras**:
  - `shadow`: sombra básica.
  - `shadow-sm`, `shadow-md`, `shadow-lg`, `shadow-xl`, `shadow-2xl`: diferentes tamaños de sombra.

- **Opacidad**:
  - `opacity-{value}`: para ajustar la opacidad (0-100).

## Posicionamiento
- **Display**:
  - `block`, `inline`, `inline-block`, `flex`, `grid`, `hidden`.

- **Posición**:
  - `relative`, `absolute`, `fixed`, `sticky`.

- **Z-index**:
  - `z-{value}`: para controlar la superposición.

## Flex y Grid
- **Flexbox**:
  - `flex-row`, `flex-col`, `flex-wrap`, `flex-nowrap`.
  - `justify-start`, `justify-center`, `justify-between`, `justify-around`, `justify-evenly`.
  - `items-start`, `items-center`, `items-end`, `items-stretch`.

- **Grid**:
  - `grid-cols-{n}`: número de columnas.
  - `grid-rows-{n}`: número de filas.
  - `gap-{size}`   : espacio entre filas y columnas.
  - `col-span-{n}`, `row-span-{n}`: para especificar el número de columnas o filas que un elemento debe ocupar.

## Responsividad
- **Prefijos**:
  - `sm:`, `md:`, `lg:`, `xl:`, `2xl:` para aplicar estilos a diferentes tamaños de pantalla.

## Estados
- **Hover/Focus/Active**:
  - `hover:{utility}`, `focus:{utility}`, `active:{utility}`.
  - `disabled:{utility}` para estilos en elementos deshabilitados.

## Otros
- **Listas**:
  - `list-none`, `list-disc`, `list-decimal`.

- **Relación de Aspecto**:
  - `aspect-ratio-{value}`: para establecer relaciones de aspecto (ej. `aspect-ratio-16/9`).

- **Visibilidad**:
  - `visible`, `invisible`, `collapse`.

- **Flexibilidad**:
  - `flex-grow`, `flex-shrink`, `flex-none`.

- **Transiciones**:
  - `transition`, `duration-{time}`, `ease-{type}` (ej. `ease-in-out`).

- **Filtros**:
  - `filter`, `blur`, `brightness-{value}`, `contrast-{value}`, `grayscale`, `invert`.

## Ejemplo de Abreviaciones Combinadas
- `mt-4 mb-2 text-center hover:bg-blue-500 lg:w-1/2`: márgenes en la parte superior e inferior, centrado de texto, fondo azul al pasar el mouse, ancho de 50% en pantallas grandes.
